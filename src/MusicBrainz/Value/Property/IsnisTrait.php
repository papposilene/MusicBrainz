<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ISNIList;

/**
 * Provides a getter for a list of IPI codes.
 */
trait IsnisTrait
{
    /**
     * A list of ISNI codes
     *
     * @var ISNIList
     */
    private $isnis;

    /**
     * Returns a list of ISNI codes.
     *
     * @return ISNIList
     */
    public function getIsnis(): ISNIList
    {
        return $this->isnis;
    }
}
