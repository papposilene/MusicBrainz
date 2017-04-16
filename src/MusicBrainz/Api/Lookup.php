<?php

namespace MusicBrainz\Api;

use AppBundle\Entity\Label;
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

class Lookup
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
     * Looks up for an area and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of an area
     *
     * @return Area
     */
    public function area(MBID $mbid)
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
    public function artist(MBID $mbid, ArtistFields $artistFields)
    {
        $fields = [
            'recordings'         => $artistFields->isRecordings(),
            'releases'           => $artistFields->isReleases(),
            'release-groups'     => $artistFields->isReleaseGroups(),
            'works'              => $artistFields->isWorks(),
            'various-artists'    => $artistFields->isVariousArtists(),
            'discids'            => $artistFields->isDiscIds(),
            'media'              => $artistFields->isMedia(),
            'aliases'            => $artistFields->isAliases(),
            'tags'               => $artistFields->isTags(),
            'user-tags'          => $artistFields->isUserTags(),
            'ratings'            => $artistFields->isRatings(),
            'user-ratings'       => $artistFields->isUserRatings(), // misc
            'artist-rels'        => $artistFields->isArtistRelations(),
            'label-rels'         => $artistFields->isLabelRelations(),
            'recording-rels'     => $artistFields->isRecordingRelations(),
            'release-rels'       => $artistFields->isReleaseRelations(),
            'release-group-rels' => $artistFields->isReleaseGroupRelations(),
            'url-rels'           => $artistFields->isURLRelations(),
            'work-rels'          => $artistFields->isWorkRelations(),
            'annotation'         => $artistFields->isAnnotation()
        ];

        $result = $this->lookup(new EntityType(EntityType::ARTIST), $mbid, $fields);

        return new Artist($result);
    }

    /**
     * Looks up for a collection and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a collection
     *
     * @return Artist
     */
    public function collection(MBID $mbid)
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
    public function instrument(MBID $mbid)
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
    public function label(MBID $mbid, LabelFields $labelFields)
    {
        $fields = [
            'releases'           => $labelFields->isReleases(),
            'discids'            => $labelFields->isDiscIds(),
            'media'              => $labelFields->isMedia(),
            'aliases'            => $labelFields->isAliases(),
            'tags'               => $labelFields->isTags(),
            'user-tags'          => $labelFields->isUserTags(),
            'ratings'            => $labelFields->isRatings(),
            'user-ratings'       => $labelFields->isUserRatings(), // misc
            'artist-rels'        => $labelFields->isArtistRelations(),
            'label-rels'         => $labelFields->isLabelRelations(),
            'recording-rels'     => $labelFields->isRecordingRelations(),
            'release-rels'       => $labelFields->isReleaseRelations(),
            'release-group-rels' => $labelFields->isReleaseGroupRelations(),
            'url-rels'           => $labelFields->isURLRelations(),
            'work-rels'          => $labelFields->isWorkRelations(),
            'annotation'         => $labelFields->isAnnotation()
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
    public function recording(MBID $mbid, RecordingFields $recordingFields)
    {
        $fields = [
            'artists' =>            $recordingFields->isArtists(),
            'releases' =>           $recordingFields->isReleases(), // sub queries
            'discids' =>            $recordingFields->isDiscIds(),
            'media' =>              $recordingFields->isMedia(),
            'artist-credits' =>     $recordingFields->isArtistCredits(),
            'tags' =>               $recordingFields->isTags(),
            'user-tags' =>          $recordingFields->isUserTags(),
            'ratings' =>            $recordingFields->isRatings(),
            'user-ratings' =>       $recordingFields->isUserRatings(), // misc
            'artist-rels' =>        $recordingFields->isArtistRelations(),
            'label-rels' =>         $recordingFields->isLabelRelations(),
            'recording-rels' =>     $recordingFields->isRecordingRelations(),
            'release-rels' =>       $recordingFields->isReleaseRelations(),
            'release-group-rels' => $recordingFields->isReleaseGroupRelations(),
            'url-rels' =>           $recordingFields->isURLRelations(),
            'work-rels' =>          $recordingFields->isWorkRelations(),
            'annotation' =>         $recordingFields->isAnnotation(),
            'aliases' =>            $recordingFields->isAliases()
        ];

        $result = $this->lookup(new EntityType(EntityType::RECORDING), $mbid, $fields);

        return new Recording($result);
    }

    /**
     * Looks up for a release and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a release
     *
     * @return Recording
     */
    public function release(MBID $mbid, ReleaseFields $releaseFields)
    {
        $fields = [
            'artists'              => $releaseFields->isArtists(),
            'collections'          => $releaseFields->isCollections(),
            'labels'               => $releaseFields->isLabels(), // sub queries
            'recordings'           => $releaseFields->isRecordings(),
            'release-groups'       => $releaseFields->isReleaseGroups(),
            'media'                => $releaseFields->isMedia(),
            'artist-credits'       => $releaseFields->isArtistCredits(),
            'discids'              => $releaseFields->isDiscIds(),
            'artist-rels'          => $releaseFields->isArtistRelations(),
            'label-rels'           => $releaseFields->isLabelRelations(), // misc
            'artist-rels'          => $releaseFields->isRecordingRelations(),
            'recording-rels'       => $releaseFields->isReleaseRelations(),
            'release-group-rels'   => $releaseFields->isReleaseGroupRelations(),
            'url-rels'             => $releaseFields->isURLRelations(),
            'work-rels'            => $releaseFields->isWorkRelations(),
            'recording-level-rels' => $releaseFields->isRecordingLevelRelations(),
            'work-level-rels'      => $releaseFields->isWorkLevelRelations(),
            'annotation'           => $releaseFields->isAnnotation(),
            'aliases'              => $releaseFields->isAliases()
        ];

        $result = $this->lookup(new EntityType(EntityType::RELEASE), $mbid, $fields);

        return new Release($result);
    }

    /**
     * Looks up for a release group and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a release group
     *
     * @return Recording
     */
    public function releaseGroup(MBID $mbid, ReleaseGroupFields $releaseGroupFields)
    {
        $fields = [
            'artists'            => $releaseGroupFields->isArtists(),
            'releases'           => $releaseGroupFields->isReleases(),
            'discids'            => $releaseGroupFields->isDiscIds(),
            'media'              => $releaseGroupFields->isMedia(),
            'artist-credits'     => $releaseGroupFields->isArtistCredits(),
            'tags'               => $releaseGroupFields->isTags(),
            'user-tags'          => $releaseGroupFields->isUserTags(),
            'ratings'            => $releaseGroupFields->isRatings(),
            'user-ratings'       => $releaseGroupFields->isUserRatings(),
            'artist-rels'        => $releaseGroupFields->isArtistRelations(),
            'label-rels'         => $releaseGroupFields->isLabelRelations(),
            'recording-rels'     => $releaseGroupFields->isRecordingRelations(),
            'release-rels'       => $releaseGroupFields->isReleaseRelations(),
            'release-group-rels' => $releaseGroupFields->isReleaseGroupRelations(),
            'url-rels'           => $releaseGroupFields->isURLRelations(),
            'work-level-rels'    => $releaseGroupFields->isWorkLevelRelations(),
            'annotations'        => $releaseGroupFields->isAnnotation(),
            'aliases'            => $releaseGroupFields->isAliases()
        ];

        $result = $this->lookup(new EntityType(EntityType::RELEASE_GROUP), $mbid, $fields);

        return new ReleaseGroup($result);
    }

    /**
     * Looks up for an URL and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of an URL
     *
     * @return U
     */
    public function url(MBID $mbid)
    {
        $result = $this->lookup(new EntityType(EntityType::URL), $mbid);

        return new URL($result);
    }

    /**
     * Looks up for a work and returns the result.
     *
     * @param MBID $mbid A Music Brainz Identifier (MBID) of a work
     *
     * @return Recording
     */
    public function work(MBID $mbid, WorkFields $workFields)
    {
        $fields = [
            'artists'       => $workFields->isArtists(),
            'aliases'       => $workFields->isAliases(),
            'tags'          => $workFields->isTags(),
            'user-tags'     => $workFields->isUserTags(),
            'ratings'       => $workFields->isRatings(),
            'user-ratings'  => $workFields->isUserRatings(),
            'artist-rels'   => $workFields->isArtistRelations(),
            'label-rels'    => $workFields->isLabelRelations(),
            'recording-rels'=> $workFields->isRecordingRelations(),
            'release-rels'  => $workFields->isReleaseRelations(),
            'release-group' => $workFields->isReleaseGroups(),
            'url-rels'      => $workFields->isURLRelations(),
            'work-rels'     => $workFields->isWorkRelations(),
            'annotations'   => $workFields->isAnnotation()
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
            $params,
            $this->httpOptions,
            $authRequired
        );

        return $response;
    }
}
