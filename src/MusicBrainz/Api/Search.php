<?php

namespace MusicBrainz\Api;

use MusicBrainz\Exception;
use MusicBrainz\Filter\Search\AnnotationFilter;
use MusicBrainz\Filter\Search\AreaFilter;
use MusicBrainz\Filter\Search\ArtistFilter;
use MusicBrainz\Filter\Search\LabelFilter;
use MusicBrainz\Filter\Search\PlaceFilter;
use MusicBrainz\Filter\Search\RecordingFilter;
use MusicBrainz\Filter\Search\ReleaseGroupFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\Filter\PageFilter;
use MusicBrainz\Value\AnnotationList;
use MusicBrainz\Value\AreaList;
use MusicBrainz\Value\ArtistList;
use MusicBrainz\Value\LabelList;
use MusicBrainz\Value\PlaceList;
use MusicBrainz\Value\RecordingList;
use MusicBrainz\Value\ReleaseGroupList;

/**
 * The search API provides methods for searching entities based on the parameters supplied in the filter objects.
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search
 */
class Search
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
     * Search for annotations and returns the result.
     *
     * @param AnnotationFilter $annotationFilter An annotation filter
     * @param PageFilter       $pageFilter       A page filter
     *
     * @return AnnotationList
     *
     * @throws Exception
     */
    public function annotation(AnnotationFilter $annotationFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($annotationFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('annotation' . '/', $params, $this->httpOptions, false, true);

        return new AnnotationList((isset($response['annotations'])) ? $response['annotations'] : []);
    }

    /**
     * Searches for areas and returns the result.
     *
     * @param AreaFilter $areaFilter An area filter
     * @param PageFilter $pageFilter A page filter
     *
     * @return AreaList
     *
     * @throws Exception
     */
    public function area(AreaFilter $areaFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($areaFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('area' . '/', $params, $this->httpOptions, false, true);

        return new AreaList((isset($response['areas'])) ? $response['areas'] : []);
    }

    /**
     * Searches for artists and returns the result.
     *
     * @param ArtistFilter $artistFilter An artist filter
     * @param PageFilter   $pageFilter   A page filter
     *
     * @return ArtistList
     *
     * @throws Exception
     */
    public function artist(ArtistFilter $artistFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($artistFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('artist' . '/', $params, $this->httpOptions, false, true);

        return new ArtistList((isset($response['artists'])) ? $response['artists'] : []);
    }

    /**
     * Searches for labels and returns the result.
     *
     * @param LabelFilter $labelFilter A label filter
     * @param PageFilter  $pageFilter  A page filter
     *
     * @return LabelList
     *
     * @throws Exception
     */
    public function label(LabelFilter $labelFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($labelFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('label' . '/', $params, $this->httpOptions, false, true);

        return new LabelList((isset($response['labels'])) ? $response['labels'] : []);
    }

    /**
     * Searches for places and returns the result.
     *
     * @param PlaceFilter $placeFilter A place filter
     * @param PageFilter  $pageFilter  A page filter
     *
     * @return PlaceList
     *
     * @throws Exception
     */
    public function place(PlaceFilter $placeFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($placeFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('place' . '/', $params, $this->httpOptions, false, true);

        return new PlaceList((isset($response['places'])) ? $response['places'] : []);
    }

    /**
     * Searches for recording and returns the result.
     *
     * @param RecordingFilter $recordingFilter A recording filter
     * @param PageFilter      $pageFilter      A page filter
     *
     * @return RecordingList
     *
     * @throws Exception
     */
    public function recording(RecordingFilter $recordingFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($recordingFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('recording' . '/', $params, $this->httpOptions, false, true);

        return new RecordingList((isset($response['recordings'])) ? $response['recordings'] : []);
    }

    /**
     * Searches for recording and returns the result.
     *
     * @param ReleaseGroupFilter $releaseGroupFilter A release group filter
     * @param PageFilter         $pageFilter         A page filter
     *
     * @return ReleaseGroupList
     *
     * @throws Exception
     */
    public function releaseGroup(ReleaseGroupFilter $releaseGroupFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($releaseGroupFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('release-group' . '/', $params, $this->httpOptions, false, true);

        return new ReleaseGroupList((isset($response['release-groups'])) ? $response['release-groups'] : []);
    }

    /**
     * Returns a list of parameters.
     *
     * @param array $filterValues
     * @param int   $limit
     * @param int   $offset
     *
     * @return array
     *
     * @throws Exception
     */
    private function getParameters($query, int $limit, int $offset): array
    {
        if (empty((string) $query)) {

            throw new Exception('The filter needs at least one argument to create a query.');
        }

        return [
            'limit'  => $limit,
            'offset' => $offset,
            'fmt'    => 'json',
            'query'  => (string) $query
        ];
    }
}
