<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the artist name by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setArtistNameFromArray(array $input): void
    {
        $this->artistName = is_null($artistName = ArrayAccess::getString($input, 'name'))
            ? new Name
            : new Name($artistName);
    }
}
