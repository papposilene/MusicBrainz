<?php

namespace MusicBrainz\Api;

use MusicBrainz\Exception;
use MusicBrainz\Filter\ArtistFilter;
use MusicBrainz\Filter\LabelFilter;
use MusicBrainz\HttpAdapters\AbstractHttpAdapter;
use MusicBrainz\Value\Artist;
use MusicBrainz\Value\Label;

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
     * Searches for artists and returns the result.
     *
     * @param ArtistFilter $artistFilter An artist filter
     * @param int          $limit        Maximum number of items
     * @param null|int     $offset
     *
     * @return Artist[]
     *
     * @throws Exception
     */
    public function artist(ArtistFilter $artistFilter, int $limit = 25, int $offset = 0)
    {
        if ($limit > 100) {
            throw new Exception('Limit can only be between 1 and 100');
        }

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

        $params = $this->getParameters($filterValues, $limit, $offset);

        $response = $this->httpAdapter->call('artist' . '/', $params, $this->httpOptions, false, true);

        return $this->parseArtistResponse($response);
    }

    /**
     * @param array $response
     *
     * @return Artist[]
     */
    private function parseArtistResponse(array $response)
    {
        $artists = array();
        if (isset($response['artist'])) {
            foreach ($response['artist'] as $artist) {
                $artists[] = new Artist($artist);
            }
        } elseif (isset($response['artists'])) {
            foreach ($response['artists'] as $artist) {
                $artists[] = new Artist($artist);
            }
        }

        return $artists;
    }

    /**
     * Searches for labels and returns the result.
     *
     * @param LabelFilter $labelFilter A label filter
     * @param int         $limit       Maximum number of items
     * @param null|int    $offset
     *
     * @return Label[]
     *
     * @throws Exception
     */
    public function label(LabelFilter $labelFilter, int $limit = 25, int $offset = 0)
    {
        if ($limit > 100) {
            throw new Exception('Limit can only be between 1 and 100');
        }

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

        $params = $this->getParameters($filterValues, $limit, $offset);

        $response = $this->httpAdapter->call('label' . '/', $params, $this->httpOptions, false, true);

        return $this->parseLabelResponse($response, $this);
    }

    /**
     * @param array $response
     *
     * @return Label[]
     */
    private function parseLabelResponse(array $response)
    {
        $labels = array();

        foreach ($response['labels'] as $label) {
            $labels[] = new Label($label);
        }

        return $labels;
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