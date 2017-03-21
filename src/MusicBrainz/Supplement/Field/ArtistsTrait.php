<?php

namespace MusicBrainz\Supplement\Field;

trait ArtistsTrait
{
    /**
     * True, if artists should be included, otherwise false
     *
     * @var bool
     */
    private $artists = false;

    /**
     * Returns true, if artists should be included, otherwise false.
     *
     * @return bool
     */
    public function isArtists(): bool
    {
        return $this->artists;
    }

    /**
     * Sets whether artists should be included.
     *
     * @param bool $artists True, if artists should be included, otherwise false
     *
     * @return self
     */
    public function setArtists(bool $artists = true): self
    {
        $this->artists = $artists;

        return $this;
    }
}
