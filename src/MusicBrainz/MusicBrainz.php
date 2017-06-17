<?php

namespace MusicBrainz;

use MusicBrainz\HttpAdapter\AbstractHttpAdapter;

/**
 * Connect to the MusicBrainz web service
 *
 * http://musicbrainz.org/doc/Development
 */
class MusicBrainz
{
    /**
     * The Http adapter used to make requests
     *
     * @var \MusicBrainz\HttpAdapter\AbstractHttpAdapter
     */
    private $adapter;

    /**
     * A set of configuration.
     *
     * @var Config
     */
    private $config;

    /**
     * Constructs the MusicBrainz API client.
     *
     * @param HttpAdapter\AbstractHttpAdapter $adapter The Http adapter used to make requests
     */
    public function __construct(AbstractHttpAdapter $adapter)
    {
        $this->adapter = $adapter;
        $this->config  = new Config;
    }

    /**
     * Returns the API.
     *
     * @return Api
     */
    public function api(): Api
    {
        return new Api($this->adapter, $this->config());
    }

    /**
     * Returns the configuration.
     *
     * @return Config
     */
    public function config(): Config
    {
        return $this->config;
    }
}
