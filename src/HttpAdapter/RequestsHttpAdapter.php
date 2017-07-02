<?php

namespace MusicBrainz\HttpAdapter;

use MusicBrainz\Config;
use MusicBrainz\Exception;
use Requests;

/**
 * Requests HTTP Client Adapter
 */
class RequestsHttpAdapter extends AbstractHttpAdapter
{

    /**
     * Initializes the class.
     *
     * @param null $endpoint Override the default endpoint (useful for local development)
     */
    public function __construct($endpoint = null)
    {
        if (filter_var($endpoint, FILTER_VALIDATE_URL)) {
            $this->endpoint = $endpoint;
        }
    }

    /**
     * Performs an HTTP request on MusicBrainz
     *
     * @param string  $path
     * @param Config  $config
     * @param array   $params
     * @param boolean $isAuthRequired
     * @param boolean $returnArray force json_decode to return an array instead of an object
     *
     * @throws \MusicBrainz\Exception
     * @return array
     */
    public function call(
        string $path,
        Config $config,
        array $params = array(),
        bool $isAuthRequired = false,
        bool $returnArray = false
    ): array {
        if (empty($config->getUserAgent())) {
            throw new Exception('You must set a valid User Agent before accessing the MusicBrainz API');
        }

        $url = $this->endpoint . '/' . $path;
        $i   = 0;
        foreach ($params as $name => $value) {
            $url .= ($i++ == 0) ? '?' : '&';
            $url .= urlencode($name) . '=' . urlencode($value);
        }

        $headers = array(
            'Accept'     => 'application/json',
            'User-Agent' => $config->getUserAgent()
        );

        $requestOptions = array();
        if ($isAuthRequired) {
            if (empty($config->getUsername()) || empty($config->getPassword())) {
                throw new Exception('Authentication is required');
            }

            $requestOptions['auth'] = [
                $config->getUsername(),
                $config->getPassword()
            ];
        }
        $request = Requests::get($url, $headers, $requestOptions);

        // musicbrainz throttle
        sleep(1);

        return json_decode($request->body, $returnArray);
    }
}
