<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\MBID;

/**
 * Provides accessors for the MusicBrainz Identifier (MBID) of the artist.
 */
trait ArtistIdAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the MusicBrainz Identifier (MBID) of the artist.
     *
     * @return null|MBID
     */
    public function getArtistId(): ?MBID
    {
        return $this->getFilterValue('arid');
    }

    /**
     * Sets the MusicBrainz Identifier (MBID) of the artist.
     *
     * @param null|MBID $artistId The MusicBrainz Identifier (MBID) of the artist
     *
     * @return self
     */
    public function setArtistId(?MBID $artistId): self
    {
        return $this->setFilterValue('arid', $artistId);
    }
}
