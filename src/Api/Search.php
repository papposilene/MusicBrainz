<?php
namespace MusicBrainz\Api;

use MusicBrainz\Config;
use MusicBrainz\Exception;
use MusicBrainz\Filter\Search\AbstractFilter;
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
use MusicBrainz\Value\SearchResult\AnnotationList;
use MusicBrainz\Value\SearchResult\AreaList;
use MusicBrainz\Value\SearchResult\ArtistList;
use MusicBrainz\Value\SearchResult\CdStubList;
use MusicBrainz\Value\SearchResult\LabelList;
use MusicBrainz\Value\SearchResult\PlaceList;
use MusicBrainz\Value\SearchResult\RecordingList;
use MusicBrainz\Value\SearchResult\ReleaseList;
use MusicBrainz\Value\SearchResult\ReleaseGroupList;
use MusicBrainz\Value\SearchResult\TagList;
use MusicBrainz\Value\SearchResult\WorkList;

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
    public function annotation(AnnotationFilter $annotationFilter, PageFilter $pageFilter): AnnotationList
    {
        $params   = $this->getParameters($annotationFilter, $pageFilter);
        $response = $this->httpAdapter->call('annotation' . '/', $this->config, $params, false, true);

        return new AnnotationList($response);
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
    public function area(AreaFilter $areaFilter, PageFilter $pageFilter): AreaList
    {
        $params   = $this->getParameters($areaFilter, $pageFilter);
        $response = $this->httpAdapter->call('area' . '/', $this->config, $params, false, true);

        return new AreaList($response);
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
    public function artist(ArtistFilter $artistFilter, PageFilter $pageFilter): ArtistList
    {
        $params   = $this->getParameters($artistFilter, $pageFilter);
        $response = $this->httpAdapter->call('artist' . '/', $this->config, $params, false, true);

        return new ArtistList($response);
    }

    /**
     * Searches for CD stubs and returns the result.
     *
     * @param CdStubFilter $cdStubFilter A CD stub filter
     * @param PageFilter   $pageFilter   A page filter
     *
     * @return CdStubList
     *
     * @throws Exception
     */
    public function cdStub(CdStubFilter $cdStubFilter, PageFilter $pageFilter): CdStubList
    {
        $params   = $this->getParameters($cdStubFilter, $pageFilter);
        $response = $this->httpAdapter->call('cdstub' . '/', $this->config, $params, false, true);

        return new CdStubList($response);
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
    public function label(LabelFilter $labelFilter, PageFilter $pageFilter): LabelList
    {
        $params   = $this->getParameters($labelFilter, $pageFilter);
        $response = $this->httpAdapter->call('label' . '/', $this->config, $params, false, true);

        return new LabelList($response);
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
    public function place(PlaceFilter $placeFilter, PageFilter $pageFilter): PlaceList
    {
        $params   = $this->getParameters($placeFilter, $pageFilter);
        $response = $this->httpAdapter->call('place' . '/', $this->config, $params, false, true);

        return new PlaceList($response);
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
    public function recording(RecordingFilter $recordingFilter, PageFilter $pageFilter): RecordingList
    {
        $params   = $this->getParameters($recordingFilter, $pageFilter);
        $response = $this->httpAdapter->call('recording' . '/', $this->config, $params, false, true);

        return new RecordingList($response);
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
    public function release(ReleaseFilter $releaseFilter, PageFilter $pageFilter): ReleaseList
    {
        $params   = $this->getParameters($releaseFilter, $pageFilter);
        $response = $this->httpAdapter->call('release' . '/', $this->config, $params, false, true);

        return new ReleaseList($response);
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
    public function releaseGroup(ReleaseGroupFilter $releaseGroupFilter, PageFilter $pageFilter): ReleaseGroupList
    {
        $params   = $this->getParameters($releaseGroupFilter, $pageFilter);
        $response = $this->httpAdapter->call('release-group' . '/', $this->config, $params, false, true);

        return new ReleaseGroupList($response);
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
    public function tag(TagFilter $tagFilter, PageFilter $pageFilter): TagList
    {
        $params   = $this->getParameters($tagFilter, $pageFilter);
        $response = $this->httpAdapter->call('tag' . '/', $this->config, $params, true, true);

        return new TagList($response);
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
    public function work(WorkFilter $workFilter, PageFilter $pageFilter): WorkList
    {
        $params   = $this->getParameters($workFilter, $pageFilter);
        $response = $this->httpAdapter->call('work' . '/', $this->config, $params, false, true);

        return new WorkList($response);
    }

    /**
     * Returns a list of parameters.
     *
     * @param AbstractFilter $searchFilter A search filter
     * @param PageFilter     $pageFilter   A page filter
     *
     * @return array
     *
     * @throws Exception
     */
    private function getParameters(AbstractFilter $searchFilter, PageFilter $pageFilter): array
    {
        if (empty((string) $searchFilter)) {

            throw new Exception('The filter needs at least one argument to create a query.');
        }

        return [
            'limit'  => $pageFilter->getLimit(),
            'offset' => $pageFilter->getOffset(),
            'fmt'    => 'json',
            'query'  => (string) $searchFilter
        ];
    }
}
