<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\InstrumentName;

/**
 * Provides a getter for an instrument name.
 */
trait InstrumentNameTrait
{
    /**
     * The instrument name
     *
     * @var InstrumentName
     */
    public $instrumentName;

    /**
     * Returns the instrument name.
     *
     * @return InstrumentName
     */
    public function getInstrumentName(): InstrumentName
    {
        return $this->instrumentName;
    }
}
