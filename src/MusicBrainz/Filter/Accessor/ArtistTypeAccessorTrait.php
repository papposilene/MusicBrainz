<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\ArtistType;

/**
 * Provides accessors for the artist type.
 */
trait ArtistTypeAccessorTrait
{
    /**
     * The artist type
     *
     * @var ArtistType
     */
    private $artistType;

    /**
     * Returns the artist type
     *
     * @return ArtistType
     */
    public function getArtistType(): ArtistType
    {
        return $this->artistType;
    }

    /**
     * Sets the artist type
     *
     * @param ArtistType $artistType The artist type
     *
     * @return self
     */
    public function setArtistType(ArtistType $artistType): self
    {
        $this->artistType = $artistType;

        return $this;
    }
}
