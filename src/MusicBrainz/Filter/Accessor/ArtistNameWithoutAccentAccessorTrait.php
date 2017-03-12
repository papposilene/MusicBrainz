<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the artist name without accents.
 */
trait ArtistNameWithoutAccentAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the artist name without accents.
     *
     * @return null|string
     */
    public function getArtistNameWithoutAccent(): ?string
    {
        return $this->getFilterValue('artistaccent');
    }

    /**
     * Sets the artist name without accents.
     *
     * @param null|string $artistNameWithoutAccent The artist name without accents
     *
     * @return self
     */
    public function setArtistNameWithoutAccent(?string $artistNameWithoutAccent): self
    {
        return $this->setFilterValue('artistaccent', $artistNameWithoutAccent);
    }
}
