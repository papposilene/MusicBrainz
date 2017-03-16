<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\MBID;

/**
 * Provides accessors for the MusicBrainz Identifier (MBID) of the artist.
 */
trait ArtistIdAccessorTrait
{
    /**
     * The MusicBrainz Identifier (MBID) of the artist.
     *
     * @var MBID
     */
    private $artistId;

    /**
     * Returns the MusicBrainz Identifier (MBID) of the artist.
     *
     * @return MBID
     */
    public function getArtistId(): MBID
    {
        return $this->artistId;
    }

    /**
     * Sets the MusicBrainz Identifier (MBID) of the artist.
     *
     * @param MBID $artistId The MusicBrainz Identifier (MBID) of the artist
     *
     * @return self
     */
    public function setArtistId(MBID $artistId): self
    {
        $this->artistId = $artistId;

        return $this;
    }
}
