<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Artist;

/**
 * Provides a getter for the artist.
 */
trait ArtistTrait
{
    /**
     * The artist
     *
     * @var Artist
     */
    private $artist;

    /**
     * Returns the artist.
     *
     * @return Artist
     */
    public function getArtist(): Artist
    {
        return $this->artist;
    }
}
