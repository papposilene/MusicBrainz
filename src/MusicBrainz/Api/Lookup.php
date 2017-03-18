<?php

namespace MusicBrainz\Api;

use MusicBrainz\Api\Lookup\ArtistFields;
use MusicBrainz\Exception;
use MusicBrainz\HttpAdapters\AbstractHttpAdapter;
use MusicBrainz\Value\Area;
use MusicBrainz\Value\MBID;

class Lookup
{
    /**
     * @var array
     */
    private static $validIncludes = array(
        'artist' => array(
            "recordings",
            "releases",
            "release-groups",
            "works",
            "various-artists",
            "discids",
            "media",
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
        'annotation'    => array(),
        'label'         => array(
            "releases",
            "discids",
            "media",
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
        'recording'     => array(
            "artists",
            "releases", // sub queries
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
     * @return Area
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

        return new Area($result);
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
