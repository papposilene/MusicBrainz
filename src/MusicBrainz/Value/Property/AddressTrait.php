<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Address;

/**
 * Provides a getter for the address.
 */
trait AddressTrait
{
    /**
     * The artist
     *
     * @var Address
     */
    private $address;

    /**
     * Returns the artist.
     *
     * @return Address
     */
    public function getArtist(): Address
    {
        return $this->address;
    }
}
