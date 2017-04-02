<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ISO31662CodeList;

/**
 * Provides a getter for a list of ISO 3166-2 codes.
 */
trait ISO31662CodesTrait
{
    /**
     * A list of ISO 3166-2 codes associated to the artist
     *
     * @var ISO31662CodeList
     */
    private $ISO31662Codes;

    /**
     * Returns a list of ISO 3166-2 codes.
     *
     * @return ISO31662CodeList
     */
    public function getISO31662Codes(): ISO31662CodeList
    {
        return $this->ISO31662Codes;
    }
}
