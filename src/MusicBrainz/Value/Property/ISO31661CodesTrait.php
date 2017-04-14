<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ISO31661CodeList;

/**
 * Provides a getter for a list of ISO 3166-1 codes.
 */
trait ISO31661CodesTrait
{
    /**
     * A list of ISO 3166-1 codes associated to the artist
     *
     * @var ISO31661CodeList
     */
    private $ISO31661Codes;

    /**
     * Returns a list of ISO 3166-1 codes.
     *
     * @return ISO31661CodeList
     */
    public function getISO31661Codes(): ISO31661CodeList
    {
        return $this->ISO31661Codes;
    }
}
