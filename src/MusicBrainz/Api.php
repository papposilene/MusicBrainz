<?php

namespace MusicBrainz;

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
     * Returns the search API.
     *
     * @return Search
     */
    public function search()
    {
        return new Search($this->httpAdapter, $this->httpOptions);
    }

    /**
     * Returns the lookup API.
     *
     * @return Lookup
     */
    public function lookup()
    {
        return new Lookup($this->httpAdapter, $this->httpOptions);
    }
}
