<?php

namespace MusicBrainz\Api;

use MusicBrainz\Config;
use MusicBrainz\Filter\PageFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\Relation\AbstractRelation;
use MusicBrainz\Relation\Entity\AreaRelation;
use MusicBrainz\Relation\Entity\ArtistRelation;
use MusicBrainz\Relation\Entity\CollectionRelation;
use MusicBrainz\Relation\Entity\EventRelation;
use MusicBrainz\Relation\Entity\LabelRelation;
use MusicBrainz\Relation\Entity\PlaceRelation;
use MusicBrainz\Relation\Entity\RecordingRelation;
use MusicBrainz\Relation\Entity\ReleaseGroupRelation;
use MusicBrainz\Relation\Entity\ReleaseRelation;
use MusicBrainz\Relation\Entity\SeriesRelation;
use MusicBrainz\Supplement\Browse\AreaFields;
use MusicBrainz\Supplement\Browse\ArtistFields;
use MusicBrainz\Supplement\Browse\EventFields;
use MusicBrainz\Supplement\Browse\LabelFields;
use MusicBrainz\Supplement\Browse\PlaceFields;
use MusicBrainz\Supplement\Browse\RecordingFields;
use MusicBrainz\Supplement\Browse\ReleaseFields;
use MusicBrainz\Supplement\Browse\ReleaseGroupFields;
use MusicBrainz\Supplement\Browse\SeriesFields;
use MusicBrainz\Value\AreaList;
use MusicBrainz\Value\ArtistList;
use MusicBrainz\Value\CollectionList;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\EventList;
use MusicBrainz\Value\LabelList;
use MusicBrainz\Value\PlaceList;
use MusicBrainz\Value\RecordingList;
use MusicBrainz\Value\ReleaseGroupList;
use MusicBrainz\Value\ReleaseList;
use MusicBrainz\Value\SeriesList;

/**
 * Browse requests are a direct lookup of all the entities directly linked to another entity.
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2#Browse
 */
class Browse
{
    /**
     * An HTTP adapter
     *
     * @var AbstractHttpAdapter
     */
    private $httpAdapter;

    /**
     * The API client configuration
     *
     * @var Config
     */
    private $config;

    /**
     * Constructs the search API.
     *
     * @param AbstractHttpAdapter $httpAdapter An HTTP adapter
     * @param Config              $config      The API client configuration
     */
    public function __construct(AbstractHttpAdapter $httpAdapter, Config $config)
    {
        $this->httpAdapter = $httpAdapter;
        $this->config      = $config;
    }

    /**
     * Looks up for all areas standing in a certain relation.
     *
     * @param AreaRelation $areaRelation A relation, the requested areas stand in
     * @param AreaFields   $areaFields   A list of properties of the areas to be included in the response
     * @param PageFilter   $pageFilter   A page filter
     *
     * @return AreaList
     */
    public function area(AreaRelation $areaRelation, AreaFields $areaFields, PageFilter $pageFilter)
    {
        $fields = [
            'aliases'      => $areaFields->getIncludeFlagForAliases(),
            'annotation'   => $areaFields->getIncludeFlagForAnnotation(),
            'ratings'      => $areaFields->getIncludeFlagForRatings(),
            'tags'         => $areaFields->getIncludeFlagForTags(),
            'user-ratings' => $areaFields->getIncludeFlagForUserRatings(),
            'user-tags'    => $areaFields->getIncludeFlagForUserTags()
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
            'aliases'      => $artistFields->getIncludeFlagForAliases(),
            'annotation'   => $artistFields->getIncludeFlagForAnnotation(),
            'ratings'      => $artistFields->getIncludeFlagForRatings(),
            'tags'         => $artistFields->getIncludeFlagForTags(),
            'user-ratings' => $artistFields->getIncludeFlagForUserRatings(),
            'user-tags'    => $artistFields->getIncludeFlagForUserTags()
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
     * @return CollectionList
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
            'aliases'      => $eventFields->getIncludeFlagForAliases(),
            'annotation'   => $eventFields->getIncludeFlagForAnnotation(),
            'ratings'      => $eventFields->getIncludeFlagForRatings(),
            'tags'         => $eventFields->getIncludeFlagForTags(),
            'user-ratings' => $eventFields->getIncludeFlagForUserRatings(),
            'user-tags'    => $eventFields->getIncludeFlagForUserTags()
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
     * @return LabelList
     */
    public function label(LabelRelation $labelRelation, LabelFields $labelFields, PageFilter $pageFilter)
    {
        $fields = [
            'aliases'      => $labelFields->getIncludeFlagForAliases(),
            'annotation'   => $labelFields->getIncludeFlagForAnnotation(),
            'ratings'      => $labelFields->getIncludeFlagForRatings(),
            'tags'         => $labelFields->getIncludeFlagForTags(),
            'user-ratings' => $labelFields->getIncludeFlagForUserRatings(),
            'user-tags'    => $labelFields->getIncludeFlagForUserTags()
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
     * Looks up for all places standing in a certain relation.
     *
     * @param PlaceRelation $placeRelation A relation, the requested place stand in
     * @param PlaceFields   $placeFields   A list of properties of the places to be included in the response
     * @param PageFilter    $pageFilter    A page filter
     *
     * @return PlaceList
     */
    public function place(PlaceRelation $placeRelation, PlaceFields $placeFields, PageFilter $pageFilter)
    {
        $fields = [
            'aliases'      => $placeFields->getIncludeFlagForAliases(),
            'annotation'   => $placeFields->getIncludeFlagForAnnotation(),
            'tags'         => $placeFields->getIncludeFlagForTags(),
            'user-tags'    => $placeFields->getIncludeFlagForUserTags()
        ];

        $result = $this->browse(
            new EntityType(EntityType::PLACE),
            $placeRelation,
            $fields,
            $pageFilter
        );

        return new PlaceList($result['places']);
    }

    /**
     * Looks up for all recordings standing in a certain relation.
     *
     * @param RecordingRelation $recordingRelation A relation, the requested recording stand in
     * @param RecordingFields   $recordingFields   A list of properties of the recordings to be included in the response
     * @param PageFilter        $pageFilter        A page filter
     *
     * @return RecordingList
     */
    public function recording(RecordingRelation $recordingRelation, RecordingFields $recordingFields, PageFilter $pageFilter)
    {
        $fields = [
            'annotation'     => $recordingFields->getIncludeFlagForAnnotation(),
            'artist-credits' => $recordingFields->getIncludeFlagForArtistCredits(),
            'isrcs'          => $recordingFields->getIncludeFlagForIsrcs(),
            'tags'           => $recordingFields->getIncludeFlagForTags(),
            'user-tags'      => $recordingFields->getIncludeFlagForUserTags()
        ];

        $result = $this->browse(
            new EntityType(EntityType::RECORDING),
            $recordingRelation,
            $fields,
            $pageFilter
        );

        return new RecordingList($result['recordings']);
    }

    /**
     * Looks up for all releases standing in a certain relation.
     *
     * @param ReleaseRelation $releaseRelation A relation, the requested releases stand in
     * @param ReleaseFields   $releaseFields   A list of properties of the releases to be included in the response
     * @param PageFilter      $pageFilter      A page filter
     *
     * @return ReleaseList
     */
    public function release(ReleaseRelation $releaseRelation, ReleaseFields $releaseFields, PageFilter $pageFilter)
    {
        $fields = [
            'annotation'     => $releaseFields->getIncludeFlagForAnnotation(),
            'artist-credits' => $releaseFields->getIncludeFlagForArtistCredits(),
            'discids'        => $releaseFields->getIncludeFlagForDiscIds(),
            'isrcs'          => $releaseFields->getIncludeFlagForIsrcs(),
            'labels'         => $releaseFields->getIncludeFlagForLabels(),
            'media'          => $releaseFields->getIncludeFlagForMedia(),
            'recordings'     => $releaseFields->getIncludeFlagForRecordings(),
            'release-groups' => $releaseFields->getIncludeFlagForReleaseGroups()
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
     * Looks up for all release groups standing in a certain relation.
     *
     * @param ReleaseGroupRelation $releaseRelation    A relation, the requested release groups stand in
     * @param ReleaseGroupFields   $releaseGroupFields A list of properties of the release groups to be included in the
     *                                                 response
     * @param PageFilter           $pageFilter         A page filter
     *
     * @return ReleaseGroupList
     */
    public function releaseGroup(
        ReleaseGroupRelation $releaseRelation,
        ReleaseGroupFields $releaseGroupFields,
        PageFilter $pageFilter
    ) {
        $fields = [
            'annotation'     => $releaseGroupFields->getIncludeFlagForAnnotation(),
            'artist-credits' => $releaseGroupFields->getIncludeFlagForArtistCredits(),
            'ratings'        => $releaseGroupFields->getIncludeFlagForRatings(),
            'tags'           => $releaseGroupFields->getIncludeFlagForTags(),
            'user-ratings'   => $releaseGroupFields->getIncludeFlagForUserRatings(),
            'user-tags'      => $releaseGroupFields->getIncludeFlagForUserTags()
        ];

        $result = $this->browse(
            new EntityType(EntityType::RELEASE_GROUP),
            $releaseRelation,
            $fields,
            $pageFilter
        );

        return new ReleaseGroupList($result['release-groups']);
    }

    /**
     * Looks up for all series standing in a certain relation.
     *
     * @param SeriesRelation $seriesRelation A relation, the requested series stand in
     * @param SeriesFields   $seriesFields   A list of properties of the series to be included in the response
     * @param PageFilter      $pageFilter    A page filter
     *
     * @return SeriesList
     */
    public function series(SeriesRelation $seriesRelation, SeriesFields $seriesFields, PageFilter $pageFilter)
    {
        $fields = [
            'aliases'      => $seriesFields->getIncludeFlagForAliases(),
            'annotation'   => $seriesFields->getIncludeFlagForAnnotation(),
            'ratings'      => $seriesFields->getIncludeFlagForRatings(),
            'tags'         => $seriesFields->getIncludeFlagForTags(),
            'user-ratings' => $seriesFields->getIncludeFlagForUserRatings(),
            'user-tags'    => $seriesFields->getIncludeFlagForUserTags()
        ];

        $result = $this->browse(
            new EntityType(EntityType::SERIES),
            $seriesRelation,
            $fields,
            $pageFilter
        );

        return new SeriesList($result['series']);
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
            'inc'                                => implode('+', $includes),
            'limit'                              => $pageFilter->getLimit(),
            'offset'                             => $pageFilter->getOffset(),
            'fmt'                                => 'json'
        ];

        $response = $this->httpAdapter->call((string) $entity . '/', $this->config, $params);

        return $response;
    }
}
