<?php

namespace MusicBrainz\Api;

use MusicBrainz\Config;
use MusicBrainz\Exception;
use MusicBrainz\Filter\Search\AnnotationFilter;
use MusicBrainz\Filter\Search\AreaFilter;
use MusicBrainz\Filter\Search\ArtistFilter;
use MusicBrainz\Filter\Search\CdStubFilter;
use MusicBrainz\Filter\Search\LabelFilter;
use MusicBrainz\Filter\Search\PlaceFilter;
use MusicBrainz\Filter\Search\RecordingFilter;
use MusicBrainz\Filter\Search\ReleaseFilter;
use MusicBrainz\Filter\Search\ReleaseGroupFilter;
use MusicBrainz\Filter\Search\TagFilter;
use MusicBrainz\Filter\Search\WorkFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\Filter\PageFilter;
use MusicBrainz\Value\AnnotationList;
use MusicBrainz\Value\AreaList;
use MusicBrainz\Value\ArtistList;
use MusicBrainz\Value\CdStubListList;
use MusicBrainz\Value\LabelList;
use MusicBrainz\Value\PlaceList;
use MusicBrainz\Value\RecordingList;
use MusicBrainz\Value\ReleaseGroupList;
use MusicBrainz\Value\ReleaseList;
use MusicBrainz\Value\TagList;
use MusicBrainz\Value\WorkList;

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

        $response = $this->httpAdapter->call('annotation' . '/', $this->config, $params, false, true);

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

        $response = $this->httpAdapter->call('area' . '/', $this->config, $params, false, true);

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

        $response = $this->httpAdapter->call('artist' . '/', $this->config, $params, false, true);

        return new ArtistList((isset($response['artists'])) ? $response['artists'] : []);
    }

    /**
     * Searches for CD stubs and returns the result.
     *
     * @param CdStubFilter $cdStubFilter A CD stub filter
     * @param PageFilter   $pageFilter   A page filter
     *
     * @return CdStubListList
     *
     * @throws Exception
     */
    public function cdStub(CdStubFilter $cdStubFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($cdStubFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('cdstub' . '/', $this->config, $params, false, true);

        return new CdStubListList((isset($response['cdstubs'])) ? $response['cdstubs'] : []);
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

        $response = $this->httpAdapter->call('label' . '/', $this->config, $params, false, true);

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

        $response = $this->httpAdapter->call('place' . '/', $this->config, $params, false, true);

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

        $response = $this->httpAdapter->call('recording' . '/', $this->config, $params, false, true);

        return new RecordingList((isset($response['recordings'])) ? $response['recordings'] : []);
    }

    /**
     * Searches for releases and returns the result.
     *
     * @param ReleaseFilter $releaseFilter A release group filter
     * @param PageFilter    $pageFilter    A page filter
     *
     * @return ReleaseList
     *
     * @throws Exception
     */
    public function release(ReleaseFilter $releaseFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($releaseFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('release' . '/', $this->config, $params, false, true);

        return new ReleaseList((isset($response['releases'])) ? $response['releases'] : []);
    }

    /**
     * Searches for release groups and returns the result.
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

        $response = $this->httpAdapter->call('release-group' . '/', $this->config, $params, false, true);

        return new ReleaseGroupList((isset($response['release-groups'])) ? $response['release-groups'] : []);
    }

    /**
     * Searches for tags and returns the result.
     *
     * @param TagFilter  $tagFilter  A tag filter
     * @param PageFilter $pageFilter A page filter
     *
     * @return TagList
     *
     * @throws Exception
     */
    public function tag(TagFilter $tagFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($tagFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('tag' . '/', $this->config, $params, true, true);

        return new TagList((isset($response['tags'])) ? $response['tags'] : []);
    }

    /**
     * Searches for works and returns the result.
     *
     * @param WorkFilter $workFilter A work filter
     * @param PageFilter $pageFilter A page filter
     *
     * @return WorkList
     *
     * @throws Exception
     */
    public function work(WorkFilter $workFilter, PageFilter $pageFilter)
    {
        $params = $this->getParameters($workFilter, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('work' . '/', $this->config, $params, false, true);

        return new WorkList((isset($response['works'])) ? $response['works'] : []);
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
