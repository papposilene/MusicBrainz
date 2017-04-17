<?php

namespace MusicBrainz\Api;

use MusicBrainz\Filter\PageFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Relation\Entity\AreaRelation as AreaRelation;
use MusicBrainz\Relation\Entity\ArtistRelation as ArtistRelation;
use MusicBrainz\Relation\Entity\CollectionRelation as CollectionRelation;
use MusicBrainz\Relation\Entity\EventRelation as EventRelation;
use MusicBrainz\Relation\Entity\LabelRelation as LabelRelation;
use MusicBrainz\Relation\Entity\ReleaseRelation as ReleaselRelation;
use MusicBrainz\Supplement\Browse\AreaFields;
use MusicBrainz\Supplement\Browse\ArtistFields;
use MusicBrainz\Supplement\Browse\EventFields;
use MusicBrainz\Supplement\Browse\LabelFields;
use MusicBrainz\Supplement\Browse\ReleaseFields;
use MusicBrainz\Value\AreaList;
use MusicBrainz\Value\ArtistList;
use MusicBrainz\Value\CollectionList;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\EventList;
use MusicBrainz\Value\LabelList;
use MusicBrainz\Value\ReleaseList;

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
     * Looks up for all areas standing in a certain relation.
     *
     * @param AreaRelation $areaRelation A relation, the requested areas stand in
     * @param AreaFields   $areaFields   A list of properties of the areas to be included in the response
     * @param PageFilter   $pageFilter   A page filter
     *
     * @return ArtistList
     */
    public function area(AreaRelation $areaRelation, AreaFields $areaFields, PageFilter $pageFilter)
    {
        $fields = [
            'aliases'      => $areaFields->isAliases(),
            'annotation'   => $areaFields->isAnnotation(),
            'ratings'      => $areaFields->isRatings(),
            'tags'         => $areaFields->isTags(),
            'user-ratings' => $areaFields->isUserRatings(),
            'user-tags'    => $areaFields->isUserTags()
        ];

        $result = $this->browse(
            new EntityType(EntityType::AREA),
            $areaRelation,
            $fields,
            $pageFilter
        );

        return new AreaList($result['areas']);
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
     * Looks up for all collections standing in a certain relation.
     *
     * @param CollectionRelation $collectionRelation A relation, the requested collections stand in
     * @param PageFilter         $pageFilter         A page filter
     *
     * @return ArtistList
     */
    public function collection(CollectionRelation $collectionRelation, PageFilter $pageFilter)
    {
        $fields = [];

        $result = $this->browse(
            new EntityType(EntityType::COLLECTION),
            $collectionRelation,
            $fields,
            $pageFilter
        );

        return new CollectionList($result['collections']);
    }

    /**
     * Looks up for all events standing in a certain relation.
     *
     * @param EventRelation $eventRelation A relation, the requested events stand in
     * @param EventFields   $eventFields   A list of properties of the events to be included in the response
     * @param PageFilter    $pageFilter    A page filter
     *
     * @return EventList
     */
    public function event(EventRelation $eventRelation, EventFields $eventFields, PageFilter $pageFilter)
    {
        $fields = [
            'aliases'      => $eventFields->isAliases(),
            'annotation'   => $eventFields->isAnnotation(),
            'ratings'      => $eventFields->isRatings(),
            'tags'         => $eventFields->isTags(),
            'user-ratings' => $eventFields->isUserRatings(),
            'user-tags'    => $eventFields->isUserTags()
        ];

        $result = $this->browse(
            new EntityType(EntityType::EVENT),
            $eventRelation,
            $fields,
            $pageFilter
        );

        return new EventList($result['events']);
    }

    /**
     * Looks up for all labels standing in a certain relation.
     *
     * @param LabelRelation $labelRelation A relation, the requested labels stand in
     * @param LabelFields   $labelFields   A list of properties of the labels to be included in the response
     * @param PageFilter    $pageFilter    A page filter
     *
     * @return ArtistList
     */
    public function label(LabelRelation $labelRelation, LabelFields $labelFields, PageFilter $pageFilter)
    {
        $fields = [
            'aliases'      => $labelFields->isAliases(),
            'annotation'   => $labelFields->isAnnotation(),
            'ratings'      => $labelFields->isRatings(),
            'tags'         => $labelFields->isTags(),
            'user-ratings' => $labelFields->isUserRatings(),
            'user-tags'    => $labelFields->isUserTags()
        ];

        $result = $this->browse(
            new EntityType(EntityType::LABEL),
            $labelRelation,
            $fields,
            $pageFilter
        );

        return new LabelList($result['labels']);
    }

    /**
     * Looks up for all releases standing in a certain relation.
     *
     * @param ReleaselRelation $releaseRelation A relation, the requested releases stand in
     * @param ReleaseFields    $releaseFields   A list of properties of the releases to be included in the response
     * @param PageFilter       $pageFilter      A page filter
     *
     * @return ArtistList
     */
    public function release(ReleaselRelation $releaseRelation, ReleaseFields $releaseFields, PageFilter $pageFilter)
    {
        $fields = [
            'annotation'     => $releaseFields->isAnnotation(),
            'artist-credits' => $releaseFields->isArtistCredits(),
            'discids'        => $releaseFields->isDiscIds(),
            'isrcs'          => $releaseFields->isIsrcs(),
            'labels'         => $releaseFields->isLabels(),
            'media'          => $releaseFields->isMedia(),
            'recordings'     => $releaseFields->isRecordings(),
            'release-groups' => $releaseFields->isReleaseGroups()
        ];

        $result = $this->browse(
            new EntityType(EntityType::RELEASE),
            $releaseRelation,
            $fields,
            $pageFilter
        );

        return new ReleaseList($result['releases']);
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
        $includes = array_keys(array_filter($includes));

        $params = [
            (string) $relation->getEntityType()  => (string) $relation->getEntityId(),
            'inc'                                       => implode('+', $includes),
            'limit'                                     => $pageFilter->getLimit(),
            'offset'                                    => $pageFilter->getOffset(),
            'fmt'                                       => 'json'
        ];

        $response = $this->httpAdapter->call((string) $entity . '/', $params, $this->httpOptions);

        return $response;
    }
}
