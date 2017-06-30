<?php

namespace MusicBrainz\Api;

use AppBundle\Entity\Label;
use MusicBrainz\Config;
use MusicBrainz\Supplement\Lookup\ArtistFields;
use MusicBrainz\Supplement\Lookup\LabelFields;
use MusicBrainz\Supplement\Lookup\RecordingFields;
use MusicBrainz\Supplement\Lookup\ReleaseFields;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\Supplement\Lookup\ReleaseGroupFields;
use MusicBrainz\Supplement\Lookup\WorkFields;
use MusicBrainz\Value\Area;
use MusicBrainz\Value\Artist;
use MusicBrainz\Value\Collection;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\Event;
use MusicBrainz\Value\Instrument;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Recording;
use MusicBrainz\Value\Release;
use MusicBrainz\Value\ReleaseGroup;
use MusicBrainz\Value\URL;
use MusicBrainz\Value\Work;

/**
 * Lookups are direct queries for entities specified by a MusicBrainz Identifier (MBID).
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2#Lookups
 */
class Lookup
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
     * Looks up for an area and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of an area
     *
     * @return Area
     */
    public function area(MBID $mbid): Area
    {
        $result = $this->lookup(new EntityType(EntityType::AREA), $mbid);

        return new Area($result);
    }

    /**
     * Looks up for an artist and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of an artist
     *
     * @return Artist
     */
    public function artist(MBID $mbid, ArtistFields $artistFields): Artist
    {
        $fields = [
            'recordings'         => $artistFields->getIncludeFlagForRecordings(),
            'releases'           => $artistFields->getIncludeFlagForReleases(),
            'release-groups'     => $artistFields->getIncludeFlagForReleaseGroups(),
            'works'              => $artistFields->getIncludeFlagForWorks(),
            'various-artists'    => $artistFields->getIncludeFlagForVariousArtists(),
            'discids'            => $artistFields->getIncludeFlagForDiscIds(),
            'media'              => $artistFields->getIncludeFlagForMedia(),
            'aliases'            => $artistFields->getIncludeFlagForAliases(),
            'tags'               => $artistFields->getIncludeFlagForTags(),
            'user-tags'          => $artistFields->getIncludeFlagForUserTags(),
            'ratings'            => $artistFields->getIncludeFlagForRatings(),
            'user-ratings'       => $artistFields->getIncludeFlagForUserRatings(), // misc
            'artist-rels'        => $artistFields->getIncludeFlagForArtistRelations(),
            'label-rels'         => $artistFields->getIncludeFlagForLabelRelations(),
            'recording-rels'     => $artistFields->getIncludeFlagForRecordingRelations(),
            'release-rels'       => $artistFields->getIncludeFlagForReleaseRelations(),
            'release-group-rels' => $artistFields->getIncludeFlagForReleaseGroupRelations(),
            'url-rels'           => $artistFields->getIncludeFlagForURLRelations(),
            'work-rels'          => $artistFields->getIncludeFlagForWorkRelations(),
            'annotation'         => $artistFields->getIncludeFlagForAnnotation()
        ];

        $result = $this->lookup(new EntityType(EntityType::ARTIST), $mbid, $fields);

        return new Artist($result);
    }

    /**
     * Looks up for a collection and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a collection
     *
     * @return Collection
     */
    public function collection(MBID $mbid): Collection
    {
        $fields = [];

        $result = $this->lookup(new EntityType(EntityType::COLLECTION), $mbid, $fields, true);

        return new Collection($result);
    }

    /**
     * Looks up for an event and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of an event
     *
     * @return Event
     */
    public function event(MBID $mbid)
    {
        $result = $this->lookup(new EntityType(EntityType::EVENT), $mbid);

        return new Event($result);
    }

    /**
     * Looks up for an instrument and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of an instrument
     *
     * @return Instrument
     */
    public function instrument(MBID $mbid): Instrument
    {
        $result = $this->lookup(new EntityType(EntityType::INSTRUMENT), $mbid);

        return new Instrument($result);
    }

    /**
     * Looks up for a label and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a label
     *
     * @return Label
     */
    public function label(MBID $mbid, LabelFields $labelFields): Label
    {
        $fields = [
            'releases'           => $labelFields->getIncludeFlagForReleases(),
            'discids'            => $labelFields->getIncludeFlagForDiscIds(),
            'media'              => $labelFields->getIncludeFlagForMedia(),
            'aliases'            => $labelFields->getIncludeFlagForAliases(),
            'tags'               => $labelFields->getIncludeFlagForTags(),
            'user-tags'          => $labelFields->getIncludeFlagForUserTags(),
            'ratings'            => $labelFields->getIncludeFlagForRatings(),
            'user-ratings'       => $labelFields->getIncludeFlagForUserRatings(), // misc
            'artist-rels'        => $labelFields->getIncludeFlagForArtistRelations(),
            'label-rels'         => $labelFields->getIncludeFlagForLabelRelations(),
            'recording-rels'     => $labelFields->getIncludeFlagForRecordingRelations(),
            'release-rels'       => $labelFields->getIncludeFlagForReleaseRelations(),
            'release-group-rels' => $labelFields->getIncludeFlagForReleaseGroupRelations(),
            'url-rels'           => $labelFields->getIncludeFlagForURLRelations(),
            'work-rels'          => $labelFields->getIncludeFlagForWorkRelations(),
            'annotation'         => $labelFields->getIncludeFlagForAnnotation()
        ];

        $result = $this->lookup(new EntityType(EntityType::LABEL), $mbid, $fields);

        return new Label($result);
    }

    /**
     * Looks up for a recording and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a recording
     *
     * @return Recording
     */
    public function recording(MBID $mbid, RecordingFields $recordingFields): Recording
    {
        $fields = [
            'artists' =>            $recordingFields->getIncludeFlagForArtists(),
            'releases' =>           $recordingFields->getIncludeFlagForReleases(), // sub queries
            'discids' =>            $recordingFields->getIncludeFlagForDiscIds(),
            'media' =>              $recordingFields->getIncludeFlagForMedia(),
            'artist-credits' =>     $recordingFields->getIncludeFlagForArtistCredits(),
            'tags' =>               $recordingFields->getIncludeFlagForTags(),
            'user-tags' =>          $recordingFields->getIncludeFlagForUserTags(),
            'ratings' =>            $recordingFields->getIncludeFlagForRatings(),
            'user-ratings' =>       $recordingFields->getIncludeFlagForUserRatings(), // misc
            'artist-rels' =>        $recordingFields->getIncludeFlagForArtistRelations(),
            'label-rels' =>         $recordingFields->getIncludeFlagForLabelRelations(),
            'recording-rels' =>     $recordingFields->getIncludeFlagForRecordingRelations(),
            'release-rels' =>       $recordingFields->getIncludeFlagForReleaseRelations(),
            'release-group-rels' => $recordingFields->getIncludeFlagForReleaseGroupRelations(),
            'url-rels' =>           $recordingFields->getIncludeFlagForURLRelations(),
            'work-rels' =>          $recordingFields->getIncludeFlagForWorkRelations(),
            'annotation' =>         $recordingFields->getIncludeFlagForAnnotation(),
            'aliases' =>            $recordingFields->getIncludeFlagForAliases()
        ];

        $result = $this->lookup(new EntityType(EntityType::RECORDING), $mbid, $fields);

        return new Recording($result);
    }

    /**
     * Looks up for a release and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a release
     *
     * @return Release
     */
    public function release(MBID $mbid, ReleaseFields $releaseFields): Release
    {
        $fields = [
            'artists'              => $releaseFields->getIncludeFlagForArtists(),
            'collections'          => $releaseFields->getIncludeFlagForCollections(),
            'labels'               => $releaseFields->getIncludeFlagForLabels(), // sub queries
            'recordings'           => $releaseFields->getIncludeFlagForRecordings(),
            'release-groups'       => $releaseFields->getIncludeFlagForReleaseGroups(),
            'media'                => $releaseFields->getIncludeFlagForMedia(),
            'artist-credits'       => $releaseFields->getIncludeFlagForArtistCredits(),
            'discids'              => $releaseFields->getIncludeFlagForDiscIds(),
            'artist-rels'          => $releaseFields->getIncludeFlagForArtistRelations(),
            'label-rels'           => $releaseFields->getIncludeFlagForLabelRelations(), // misc
            'recording-rels'       => $releaseFields->getIncludeFlagForRecordingRelations(),
            'release-rels'         => $releaseFields->getIncludeFlagForReleaseRelations(),
            'release-group-rels'   => $releaseFields->getIncludeFlagForReleaseGroupRelations(),
            'url-rels'             => $releaseFields->getIncludeFlagForURLRelations(),
            'work-rels'            => $releaseFields->getIncludeFlagForWorkRelations(),
            'recording-level-rels' => $releaseFields->getIncludeFlagForRecordingLevelRelations(),
            'work-level-rels'      => $releaseFields->getIncludeFlagForWorkLevelRelations(),
            'annotation'           => $releaseFields->getIncludeFlagForAnnotation(),
            'aliases'              => $releaseFields->getIncludeFlagForAliases()
        ];

        $result = $this->lookup(new EntityType(EntityType::RELEASE), $mbid, $fields);

        return new Release($result);
    }

    /**
     * Looks up for a release group and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a release group
     *
     * @return ReleaseGroup
     */
    public function releaseGroup(MBID $mbid, ReleaseGroupFields $releaseGroupFields): ReleaseGroup
    {
        $fields = [
            'artists'            => $releaseGroupFields->getIncludeFlagForArtists(),
            'releases'           => $releaseGroupFields->getIncludeFlagForReleases(),
            'discids'            => $releaseGroupFields->getIncludeFlagForDiscIds(),
            'media'              => $releaseGroupFields->getIncludeFlagForMedia(),
            'artist-credits'     => $releaseGroupFields->getIncludeFlagForArtistCredits(),
            'tags'               => $releaseGroupFields->getIncludeFlagForTags(),
            'user-tags'          => $releaseGroupFields->getIncludeFlagForUserTags(),
            'ratings'            => $releaseGroupFields->getIncludeFlagForRatings(),
            'user-ratings'       => $releaseGroupFields->getIncludeFlagForUserRatings(),
            'artist-rels'        => $releaseGroupFields->getIncludeFlagForArtistRelations(),
            'label-rels'         => $releaseGroupFields->getIncludeFlagForLabelRelations(),
            'recording-rels'     => $releaseGroupFields->getIncludeFlagForRecordingRelations(),
            'release-rels'       => $releaseGroupFields->getIncludeFlagForReleaseRelations(),
            'release-group-rels' => $releaseGroupFields->getIncludeFlagForReleaseGroupRelations(),
            'url-rels'           => $releaseGroupFields->getIncludeFlagForURLRelations(),
            'work-level-rels'    => $releaseGroupFields->getIncludeFlagForWorkLevelRelations(),
            'annotations'        => $releaseGroupFields->getIncludeFlagForAnnotation(),
            'aliases'            => $releaseGroupFields->getIncludeFlagForAliases()
        ];

        $result = $this->lookup(new EntityType(EntityType::RELEASE_GROUP), $mbid, $fields);

        return new ReleaseGroup($result);
    }

    /**
     * Looks up for an URL and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of an URL
     *
     * @return URL
     */
    public function url(MBID $mbid): URL
    {
        $result = $this->lookup(new EntityType(EntityType::URL), $mbid);

        return new URL($result);
    }

    /**
     * Looks up for a work and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a work
     *
     * @return Work
     */
    public function work(MBID $mbid, WorkFields $workFields): Work
    {
        $fields = [
            'artists'       => $workFields->getIncludeFlagForArtists(),
            'aliases'       => $workFields->getIncludeFlagForAliases(),
            'tags'          => $workFields->getIncludeFlagForTags(),
            'user-tags'     => $workFields->getIncludeFlagForUserTags(),
            'ratings'       => $workFields->getIncludeFlagForRatings(),
            'user-ratings'  => $workFields->getIncludeFlagForUserRatings(),
            'artist-rels'   => $workFields->getIncludeFlagForArtistRelations(),
            'label-rels'    => $workFields->getIncludeFlagForLabelRelations(),
            'recording-rels'=> $workFields->getIncludeFlagForRecordingRelations(),
            'release-rels'  => $workFields->getIncludeFlagForReleaseRelations(),
            'release-group' => $workFields->getIncludeFlagForReleaseGroups(),
            'url-rels'      => $workFields->getIncludeFlagForURLRelations(),
            'work-rels'     => $workFields->getIncludeFlagForWorkRelations(),
            'annotations'   => $workFields->getIncludeFlagForAnnotation()
        ];

        $result = $this->lookup(new EntityType(EntityType::WORK), $mbid, $fields);

        return new Work($result);
    }

    /**
     * Looks up for an entity by performing a request to MusicBrainz webservice.
     *
     * @link http://musicbrainz.org/doc/XML_Web_Service
     *
     * @param EntityType $entityType   An entity type
     * @param MBID       $mbid         A MusicBrainz Identifier (MBID)
     * @param array      $includes     A list of include parameters
     * @param bool       $authRequired True, if user authentication is required
     *
     * @return array
     */
    private function lookup(EntityType $entityType, MBID $mbid, array $includes = [], bool $authRequired = false)
    {
        $includes = array_keys(array_filter($includes));

        $params = [
            'inc' => implode('+', $includes),
            'fmt' => 'json'
        ];

        $response = $this->httpAdapter->call(
            (string) $entityType .
            '/' .
            (string) $mbid,
            $this->config,
            $params,
            $authRequired
        );

        return $response;
    }
}
