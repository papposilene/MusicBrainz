<?php

namespace MusicBrainz\Api;

use AppBundle\Entity\Label;
use MusicBrainz\Api\Lookup\ArtistFields;
use MusicBrainz\Api\Lookup\LabelFields;
use MusicBrainz\Api\Lookup\RecordingFields;
use MusicBrainz\Exception;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\Value\Area;
use MusicBrainz\Value\Artist;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Recording;

class Lookup
{
    /**
     * @var array
     */
    private static $validIncludes = array(
        'release'       => array(
            "artists",
            "labels",
            "recordings",
            "release-groups",
            "media",
            "artist-credits",
            "discids",
            "puids",
            "echoprints",
            "isrcs",
            "artist-rels",
            "label-rels",
            "recording-rels",
            "release-rels",
            "release-group-rels",
            "url-rels",
            "work-rels",
            "recording-level-rels",
            "work-level-rels",
            "annotation",
            "aliases"
        ),
        'release-group' => array(
            "artists",
            "releases",
            "discids",
            "media",
            "artist-credits",
            "tags",
            "user-tags",
            "ratings",
            "user-ratings", // misc
            "artist-rels",
            "label-rels",
            "recording-rels",
            "release-rels",
            "release-group-rels",
            "url-rels",
            "work-rels",
            "annotation",
            "aliases"
        ),
        'work'          => array(
            "artists", // sub queries
            "aliases",
            "tags",
            "user-tags",
            "ratings",
            "user-ratings", // misc
            "artist-rels",
            "label-rels",
            "recording-rels",
            "release-rels",
            "release-group-rels",
            "url-rels",
            "work-rels",
            "annotation"
        ),
        'discid'        => array(
            "artists",
            "labels",
            "recordings",
            "release-groups",
            "media",
            "artist-credits",
            "discids",
            "puids",
            "echoprints",
            "isrcs",
            "artist-rels",
            "label-rels",
            "recording-rels",
            "release-rels",
            "release-group-rels",
            "url-rels",
            "work-rels",
            "recording-level-rels",
            "work-level-rels"
        ),
        'echoprint'     => array(
            "artists",
            "releases"
        ),
        'puid'          => array(
            "artists",
            "releases",
            "puids",
            "echoprints",
            "isrcs"
        ),
        'isrc'          => array(
            "artists",
            "releases",
            "puids",
            "echoprints",
            "isrcs"
        ),
        'iswc'          => array(
            "artists"
        ),
        'collection'    => array(
            'releases'
        )
    );

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
        $result = $this->lookup('area', $mbid);

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

        $result = $this->lookup('artist', $mbid, $fields);

        return new Artist($result);
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

        $result = $this->lookup('label', $mbid, $fields);

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

        $result = $this->lookup('recording', $mbid, $fields);

        return new Recording($result);
    }

    /**
     * Do a MusicBrainz lookup
     *
     * http://musicbrainz.org/doc/XML_Web_Service
     *
     * @param string $entity
     * @param MBID   $mbid     Music Brainz ID
     * @param array  $includes
     *
     * @throws Exception
     *
     * @return array
     */
    private function lookup($entity, MBID $mbid, array $includes = [])
    {
        // $this->validateInclude($includes, self::$validIncludes[$entity]);

        // $authRequired = $this->isAuthRequired($entity, $includes);
        $authRequired = false;

        $includes = array_keys(array_filter($includes));

        $params = [
            'inc' => implode('+', $includes),
            'fmt' => 'json'
        ];

        $response = $this->httpAdapter->call($entity . '/' . (string) $mbid, $params, $this->httpOptions, $authRequired);

        return $response;
    }

    /**
     * @param $includes
     * @param $validIncludes
     *
     * @return bool
     * @throws \OutOfBoundsException
     */
    public function validateInclude($includes, $validIncludes)
    {
        foreach ($includes as $include) {
            if (!in_array($include, $validIncludes)) {
                throw new \OutOfBoundsException(sprintf('%s is not a valid include', $include));
            }
        }

        return true;
    }
}
