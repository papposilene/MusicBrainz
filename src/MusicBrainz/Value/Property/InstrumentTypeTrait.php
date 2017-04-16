<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\InstrumentType;

/**
 * Provides a getter for the instrument type.
 */
trait InstrumentTypeTrait
{
    /**
     * The instrument type
     *
     * @var InstrumentType
     */
    private $instrumentType;

    /**
     * Returns the instrument type.
     *
     * @return InstrumentType
     */
    public function getInstrumentType(): InstrumentType
    {
        return $this->instrumentType;
    }
}
