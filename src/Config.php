<?php

namespace MusicBrainz;

/**
 * The API client configuration
 */
class Config
{
    /**
     * The username of a MusicBrainz account
     *
     * @var string
     */
    private $username;

    /**
     * The password of a MusicBrainz account
     *
     * @var string
     */
    private $password;

    /**
     * The user agent
     * The user agent is delivered with every request. You may overwrite the default value with the name of your own
     * application.
     *
     * @var string
     */
    private $userAgent = 'https://github.com/XenosEleatikos/MusicBrainz';

    /**
     * Returns the username.
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Sets the username.
     *
     * @param string $username The username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Returns the password.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Sets the password.
     *
     * @param string $password The password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returns the user agent.
     *
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * Sets the user agent.
     *
     * @param string $userAgent The user agent
     *
     * @return self
     */
    public function setUserAgent(string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }
}
