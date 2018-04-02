<?php
namespace MusicBrainz\HttpAdapter;

use MusicBrainz\Config;

/**
 * MusicBrainz HTTP Client interface
 */
abstract class AbstractHttpAdapter
{
    /**
     * @var string
     */
    public $endpoint = 'http://musicbrainz.org/ws/2';

    /**
     * Perform an HTTP request on MusicBrainz
     *
     * @param  string  $path
     * @param  Config  $config
     * @param  array   $params
     * @param  boolean $isAuthRequired
     * @param  boolean $returnArray
     *
     * @return array
     */
    abstract public function call(
        string $path,
        Config $config,
        array $params = array(),
        bool $isAuthRequired = false,
        bool $returnArray = false
    ): array;
}
