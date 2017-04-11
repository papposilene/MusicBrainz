<?php

namespace MusicBrainz\Api;

use MusicBrainz\Exception;
use MusicBrainz\Filter\PageFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Relation\Entity\Artist as ArtistRelation;
use MusicBrainz\Supplement\Browse\ArtistFields;
use MusicBrainz\Value\ArtistList;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;

class Browse
{
    /**
     * An HTTP adapter
     *
     * @var AbstractHttpAdapter
     */
    private $httpAdapter;

    /**
     * A list of http options.
     *
     * @var array
     */
    private $httpOptions;

    /**
     * Constructs the search API.
     *
     * @param AbstractHttpAdapter $httpAdapter An HTTP adapter
     * @param array               $httpOptions A list of http options
     */
    public function __construct(AbstractHttpAdapter $httpAdapter, array $httpOptions)
    {
        $this->httpAdapter = $httpAdapter;
        $this->httpOptions = $httpOptions;
    }

    /**
     * Looks up for all artists standing in a certain relation.
     *
     * @param ArtistRelation $artistRelation A relation, the requested artists stand in
     * @param ArtistFields   $artistFields   A list of properties of the artists to be included in the response
     * @param PageFilter     $pageFilter     A page filter
     *
     * @return ArtistList
     */
    public function artist(ArtistRelation $artistRelation, ArtistFields $artistFields, PageFilter $pageFilter)
    {
        $fields = [
            'aliases'      => $artistFields->isAliases(),
            'annotation'   => $artistFields->isAnnotation(),
            'ratings'      => $artistFields->isRatings(),
            'tags'         => $artistFields->isTags(),
            'user-ratings' => $artistFields->isUserRatings(),
            'user-tags'    => $artistFields->isUserTags()
        ];

        $result = $this->browse(
            new EntityType(EntityType::ARTIST),
            $artistRelation,
            $fields,
            $pageFilter
        );

        return new ArtistList($result['artists']);
    }

    /**
     * Looks up for entities standing in a certain relation.
     *
     * @param EntityType       $entity     The type of the requested entities
     * @param AbstractRelation $relation   The type of the related entity
     * @param array            $includes   A list of properties of the requested entities to be included in the response
     * @param PageFilter       $pageFilter A page filter
     *
     * @return array
     */
    private function browse(
        EntityType $entity,
        AbstractRelation $relation,
        array $includes,
        PageFilter $pageFilter
    ) {
        $params = [
            (string) $relation->getRelatedEntityType()  => (string) $relation->getRelatedEntityId(),
            'inc'                                       => implode('+', $includes),
            'limit'                                     => $pageFilter->getLimit(),
            'offset'                                    => $pageFilter->getOffset(),
            'fmt'                                       => 'json'
        ];

        $response = $this->httpAdapter->call((string) $entity . '/', $params, $this->httpOptions);

        return $response;
    }
}
