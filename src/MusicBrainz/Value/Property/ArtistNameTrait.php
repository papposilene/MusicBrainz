<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Name;

/**
 * Provides a getter for an artist name.
 */
trait ArtistNameTrait
{
    /**
     * The artist name
     *
     * @var Name
     */
    public $artistName;

    /**
     * Returns the artist name.
     *
     * @return Name
     */
    public function getArtistName(): Name
    {
        return $this->artistName;
    }

}
