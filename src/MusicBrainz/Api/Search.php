<?php

namespace MusicBrainz\Api;

use MusicBrainz\Exception;
use MusicBrainz\Filter\AnnotationFilter;
use MusicBrainz\Filter\AreaFilter;
use MusicBrainz\Filter\ArtistFilter;
use MusicBrainz\Filter\LabelFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\Filter\PageFilter;
use MusicBrainz\Value\AnnotationList;
use MusicBrainz\Value\Area;
use MusicBrainz\Value\AreaList;
use MusicBrainz\Value\Artist;
use MusicBrainz\Value\ArtistList;
use MusicBrainz\Value\Label;
use MusicBrainz\Value\LabelList;

/**
 * Performs a query based on the parameters supplied in the Filter object.
 * Returns an array of possible matches with scores, as returned by the MusicBrainz web service.
 *
 * Note that these types of queries only return some information, and not all the information available about a
 * particular item is available using this type of query.
 * You will need to get the MusicBrainz id (mbid) and perform a lookup with browse to return complete information about
 * a release. This method returns an array of objects that are possible matches.
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
     * @return array
     *
     * @throws AnnotationList
     */
    public function annotation(AnnotationFilter $annotationFilter, PageFilter $pageFilter)
    {
        $filterValues = [
            'name'   => (string) $annotationFilter->getEntityName(),
            'entity' => (string) $annotationFilter->getEntityId(),
            'text'   => (string) $annotationFilter->getText(),
            'type'   => (string) $annotationFilter->getEntityType()
        ];

        $params = $this->getParameters($filterValues, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('annotation' . '/', $params, $this->httpOptions, false, true);

        return new AnnotationList((isset($response['annotations'])) ? $response['annotations'] : []);
    }

    /**
     * Searches for areas and returns the result.
     *
     * @param AreaFilter $areaFilter An area filter
     * @param PageFilter $pageFilter A page filter
     *
     * @return Area[]
     *
     * @throws Exception
     */
    public function area(AreaFilter $areaFilter, PageFilter $pageFilter)
    {
        $filterValues = [
            'aid'      => (string) $areaFilter->getAreaId(),
            'alias'    => (string) $areaFilter->getAliasName(),
            'arid'     => (string) $areaFilter->getAreaId(),
            'area'     => (string) $areaFilter->getAreaName(),
            'begin'    => (string) $areaFilter->getBeginDate(),
            'comment'  => (string) $areaFilter->getComment(),
            'end'      => (string) $areaFilter->getEndDate(),
            'ended'    => (string) $areaFilter->isEnded(),
            'iso'      => (string) $areaFilter->getIso3166Code(),
            'iso1'     => (string) $areaFilter->getIso31661Code(),
            'iso2'     => (string) $areaFilter->getIso31662Code(),
            'iso3'     => (string) $areaFilter->getIso31663Code(),
            'sortname' => (string) $areaFilter->getSortName(),
            'type'     => (string) $areaFilter->getAreaType()
        ];

        $params = $this->getParameters($filterValues, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('area' . '/', $params, $this->httpOptions, false, true);

        return new AreaList((isset($response['areas'])) ? $response['areas'] : []);
    }

    /**
     * Searches for artists and returns the result.
     *
     * @param ArtistFilter $artistFilter An artist filter
     * @param PageFilter   $pageFilter   A page filter
     *
     * @return Artist[]
     *
     * @throws Exception
     */
    public function artist(ArtistFilter $artistFilter, PageFilter $pageFilter)
    {
        $filterValues = [
            'alias'        => (string) $artistFilter->getAliasName(),
            'area'         => (string) $artistFilter->getAreaName(),
            'arid'         => (string) $artistFilter->getArtistId(),
            'artist'       => (string) $artistFilter->getArtistName(),
            'artistaccent' => (string) $artistFilter->getArtistNameWithoutAccent(),
            'begin'        => (string) $artistFilter->getBeginDate(),
            'beginarea'    => (string) $artistFilter->getBeginArea(),
            'comment'      => (string) $artistFilter->getComment(),
            'country'      => (string) $artistFilter->getCountry(),
            'end'          => (string) $artistFilter->getEndDate(),
            'endarea'      => (string) $artistFilter->getEndArea(),
            'ended'        => (string) $artistFilter->isEnded(),
            'gender'       => (string) $artistFilter->getGender(),
            'ipi'          => (string) $artistFilter->getIpiCode(),
            'sortname'     => (string) $artistFilter->getSortName(),
            'tag'          => (string) $artistFilter->getTag()
        ];

        $params = $this->getParameters($filterValues, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('artist' . '/', $params, $this->httpOptions, false, true);

        return new ArtistList((isset($response['artists'])) ? $response['artists'] : []);
    }

    /**
     * Searches for labels and returns the result.
     *
     * @param LabelFilter $labelFilter A label filter
     * @param PageFilter  $pageFilter  A page filter
     *
     * @return Label[]
     *
     * @throws Exception
     */
    public function label(LabelFilter $labelFilter, PageFilter $pageFilter)
    {
        $filterValues = [
            'alias'       => (string) $labelFilter->getAliasName(),
            'begin'       => (string) $labelFilter->getBeginDate(),
            'code'        => (string) $labelFilter->getLabelCode(),
            'comment'     => (string) $labelFilter->getComment(),
            'country'     => (string) $labelFilter->getCountry(),
            'end'         => (string) $labelFilter->getEndDate(),
            'ended'       => (string) $labelFilter->isEnded(),
            'ipi'         => (string) $labelFilter->getIpiCode(),
            'label'       => (string) $labelFilter->getLabelCode(),
            'labelaccent' => (string) $labelFilter->getLabelNameWithoutAccent(),
            'laid'        => (string) $labelFilter->getLabelId(),
            'sortname'    => (string) $labelFilter->getSortName(),
            'tag'         => (string) $labelFilter->getTag(),
            'type'        => (string) $labelFilter->getLabelType()
        ];

        $params = $this->getParameters($filterValues, $pageFilter->getLimit(), $pageFilter->getOffset());

        $response = $this->httpAdapter->call('label' . '/', $params, $this->httpOptions, false, true);

        return new LabelList((isset($response['labels'])) ? $response['labels'] : []);
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
    private function getParameters($filterValues, int $limit, int $offset): array
    {
        $filterValues = array_filter($filterValues);

        if (empty($filterValues)) {

            throw new Exception('The artist filter object needs at least 1 argument to create a query.');
        }

        $params = ['limit' => $limit, 'offset' => $offset, 'fmt' => 'json'] + ['query' => ''];

        foreach ($filterValues as $key => $val) {
            if ($params['query'] != '') {
                $params['query'] .= '+AND+';
            }

            if (!in_array($key, ['arid'])) {
                // Lucene escape characters
                $val = urlencode(
                    preg_replace('/([\+\-\!\(\)\{\}\[\]\^\~\*\?\:\\\\])/', '\\\\$1', $val)
                );
            }
            // If the search string contains a space, wrap it in brackets/quotes
            // This isn't always wanted, but for the searches required in this
            // library, I'm going to do it.
            if (preg_match('/[\+]/', $val)) {
                $val = '(' . $val . ')';
            }

            $params['query'] .= $key . ':' . $val;
        }
        return $params;
    }
}
