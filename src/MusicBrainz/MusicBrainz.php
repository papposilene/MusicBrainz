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
     * @var string
     */
    private $userAgent = 'MusicBrainz PHP Api/0.2.0';

    /**
     * The username a MusicBrainz user. Used for authentication.
     *
     * @var string
     */
    private $user = null;

    /**
     * The password of a MusicBrainz user. Used for authentication.
     *
     * @var string
     */
    private $password = null;

    /**
     * The Http adapter used to make requests
     *
     * @var \MusicBrainz\HttpAdapter\AbstractHttpAdapter
     */
    private $adapter;

    /**
     * Initializes the class. You can pass the user’s username and password
     * However, you can modify or add all values later.
     *
     * @param HttpAdapter\AbstractHttpAdapter $adapter The Http adapter used to make requests
     * @param string                           $user
     * @param string                           $password
     */
    public function __construct(AbstractHttpAdapter $adapter, $user = null, $password = null)
    {
        $this->adapter = $adapter;

        if (null != $user) {
            $this->setUser($user);
        }

        if (null != $password) {
            $this->setPassword($password);
        }
    }

    /**
     * Returns the API.
     *
     * @return Api
     */
    public function api()
    {
        return new Api($this->adapter, $this->getHttpOptions());
    }

    /**
     * @return array
     */
    public function getHttpOptions()
    {
        return array(
            'method'     => 'GET',
            'user-agent' => $this->getUserAgent(),
            'user'       => $this->getUser(),
            'password'   => $this->getPassword()
        );
    }

    /**
     * Returns the user agent.
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set the user agent for POST requests (and GET requests for user tags)
     *
     * @param string $application The name of the application using this library
     * @param string $version The version of the application using this library
     * @param string $contactInfo E-mail or website of the application
     *
     * @throws Exception
     */
    public function setUserAgent($application, $version, $contactInfo)
    {
        if (strpos($version, '-') !== false) {
            throw new Exception('User agent: version should not contain a "-" character.');
        }

        $this->userAgent = $application . '/' . $version . ' (' . $contactInfo . ')';
    }

    /**
     * Returns the MusicBrainz user
     *
     * @return null|string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the MusicBrainz user
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Returns the user’s password
     *
     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the user’s password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
