<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\ArtistType;

/**
 * Provides accessors for the artist type.
 */
trait ArtistTypeTrait
{
    /**
     * The artist type
     *
     * @var null|ArtistType
     */
    private $artistType;

    /**
     * Returns the artist type
     *
     * @return null|ArtistType
     */
    public function getArtistType(): ?ArtistType
    {
        return $this->artistType;
    }

    /**
     * Sets the artist type
     *
     * @param null|ArtistType $artistType The artist type
     *
     * @return self
     */
    public function setArtistType(?ArtistType $artistType): self
    {
        $this->artistType = $artistType;

        return $this;
    }
}
