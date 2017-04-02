<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the artist name without accents.
 */
trait ArtistNameWithoutAccentTrait
{
    /**
     * The artist name without accent.
     *
     * @var null|Name
     */
    private $artistNameWithoutAccent;

    /**
     * Returns the artist name without accent.
     *
     * @return null|Name
     */
    public function getArtistNameWithoutAccent(): ?Name
    {
        return $this->artistNameWithoutAccent;
    }

    /**
     * Sets the artist name without accent.
     *
     * @param null|Name $artistNameWithoutAccent The artist name without accent
     *
     * @return self
     */
    public function setArtistNameWithoutAccent(?Name $artistNameWithoutAccent): self
    {
        $this->artistNameWithoutAccent = $artistNameWithoutAccent;

        return $this;
    }
}
