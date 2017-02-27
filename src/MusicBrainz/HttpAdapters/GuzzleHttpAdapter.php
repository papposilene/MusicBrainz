<?php

namespace MusicBrainz\HttpAdapters;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ServerException;
use MusicBrainz\Exception;

/**
 * Adapter for Guzzle 6 HTTP Client.
 *
 * @see http://docs.guzzlephp.org
 */
class GuzzleHttpAdapter extends AbstractHttpAdapter
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * Initialize class
     *
     * @param ClientInterface $client   A Guzzle HTTP client
     * @param null|string     $endpoint API endpoint
     */
    public function __construct(ClientInterface $client, ?string $endpoint = null)
    {
        $this->client = $client;

        if (filter_var($endpoint, FILTER_VALIDATE_URL)) {
            $this->endpoint = $endpoint;
        }
    }

    /**
     * Performs an HTTP request on MusicBrainz API.
     *
     * @param  string $path
     * @param  array  $params
     * @param  array  $options
     * @param  bool   $isAuthRequired
     * @param  bool   $returnArray
     *
     * @throws Exception
     * @return array
     */
    public function call(
        string $path,
        array $params = array(),
        array $options = array(),
        bool $isAuthRequired = false,
        bool $returnArray = false
    ) {
        if ($options['user-agent'] == '') {
            throw new Exception('You must set a valid User Agent before accessing the MusicBrainz API');
        }

        $requestOptions = [
            'headers'        => [
                'Accept'     => 'application/json',
                'User-Agent' => $options['user-agent']
            ],
            'query' => urldecode(http_build_query($params))
        ];

        if ($isAuthRequired) {
            if ($options['user'] != null && $options['password'] != null) {
                $requestOptions['auth'] = [
                    $options['user'],
                    $options['password'],
                    'digest'
                ];
            } else {
                throw new Exception('Authentication is required');
            }
        }

        /**
         * @todo Implement caching last request time, such that MusicBrainz rules are followed.
         *
         * @see https://musicbrainz.org/doc/XML_Web_Service/Rate_Limiting
         *
         * @todo Implement loop to retry in case of 503
         */
        sleep(1);
        try{
            $request = $this->client->request('GET', $this->endpoint . '/' . $path, $requestOptions);
        }catch (ServerException $e){
            sleep(1);
            $request = $this->client->request('GET', $this->endpoint . '/' . $path, $requestOptions);
        }
        $responseBody = json_decode($request->getBody());
        /**
         * This is a weird one, but because most if not all functions in this package expect arrays
         * we try to give them that as early as possible and avoid errors while keeping compatibility to a maximum.
         */
        $responseBody = json_decode(json_encode($responseBody), true);

        return $responseBody;
    }
}
