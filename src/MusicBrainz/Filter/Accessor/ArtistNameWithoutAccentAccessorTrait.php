<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the artist name.
 */
trait ArtistNameAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the artists name.
     *
     * @return null|string
     */
    public function getArtistName(): ?string
    {
        return $this->getFilterValue('artist');
    }

    /**
     * Sets the artist's name.
     *
     * @param null|string $artistName The artist's name
     *
     * @return self
     */
    public function setArtistName(?string $artistName): self
    {
        return $this->setFilterValue('artist', $artistName);
    }
}
