<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\ArtistType;

/**
 * Provides accessors for the artist type.
 */
trait ArtistTypeAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the artist type.
     *
     * @return null|ArtistType
     */
    public function getArtistType(): ?ArtistType
    {
        return $this->getFilterValue('type');
    }

    /**
     * Sets the artist type.
     *
     * @param null|ArtistType $artistType An artist type
     *
     * @return self
     */
    public function setArtistType(?ArtistType $artistType): self
    {
        return $this->setFilterValue('type', $artistType);
    }
}
