<?php
namespace MusicBrainz;

use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * The library's main class
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
     * A logger
     *
     * @var LoggerInterface
     */
    private static $logger;

    /**
     * Constructs the MusicBrainz API client.
     *
     * @param HttpAdapter\AbstractHttpAdapter $adapter The Http adapter used to make requests
     */
    public function __construct(AbstractHttpAdapter $adapter, LoggerInterface $logger = null)
    {
        $this->adapter = $adapter;
        $this->config  = new Config;
        self::setLogger($logger);
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

    /**
     * Returns the logger.
     *
     * @return LoggerInterface
     */
    public static function log(): LoggerInterface
    {
        return (is_null(self::$logger)) ? self::setLogger() : self::$logger;
    }

    /**
     * Sets a given logger statically and returns it. Creates a new null object logger, sets it statically and returns
     * it, if no logger was given.
     *
     * @param null|LoggerInterface $logger A logger
     *
     * @return LoggerInterface
     */
    private static function setLogger(LoggerInterface $logger = null): LoggerInterface
    {
        return self::$logger = (is_null($logger)) ? new NullLogger : $logger;
    }
}
