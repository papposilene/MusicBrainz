<?php

namespace MusicBrainz;

use MusicBrainz\Api\Browse;
use MusicBrainz\Api\Search;
use MusicBrainz\Api\Lookup;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;

/**
 * Represents a MusicBrainz tag object
 * @package MusicBrainz
 */
class Api
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
     * Returns the browse API.
     *
     * @return Browse
     */
    public function browse()
    {
        return new Browse($this->httpAdapter, $this->config);
    }

    /**
     * Returns the lookup API.
     *
     * @return Lookup
     */
    public function lookup()
    {
        return new Lookup($this->httpAdapter, $this->config);
    }

    /**
     * Returns the search API.
     *
     * @return Search
     */
    public function search()
    {
        return new Search($this->httpAdapter, $this->config);
    }
}
