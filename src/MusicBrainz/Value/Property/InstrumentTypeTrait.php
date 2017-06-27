<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the instrument type by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setInstrumentTypeFromArray(array $input): void
    {
        $this->instrumentType = is_null($instrumentType = ArrayAccess::getString($input, 'type'))
            ? new InstrumentType
            : new InstrumentType($instrumentType);
    }
}
