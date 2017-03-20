<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the artist name.
 */
trait ArtistNameTrait
{
    /**
     * The artist name
     *
     * @var Name
     */
    private $artistName;

    /**
     * Returns the artist name.
     *
     * @return Name
     */
    public function getArtistName(): Name
    {
        return $this->artistName;
    }

    /**
     * Sets the artist name.
     *
     * @param Name $artistName
     *
     * @return self
     */
    public function setArtistName(Name $artistName): self
    {
        $this->artistName = $artistName;

        return $this;
    }
}
