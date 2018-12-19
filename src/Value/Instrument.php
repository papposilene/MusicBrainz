<?php

namespace MusicBrainz\Value;

use MusicBrainz\Relation\RelationList\Property\InstrumentRelationListTrait;
use MusicBrainz\Value;

/**
 * An instrument
 *
 * @link https://musicbrainz.org/instruments
 */
class Instrument implements Value
{
    use InstrumentRelationListTrait;
    use Property\DescriptionTrait;
    use Property\DisambiguationTrait;
    use Property\InstrumentNameTrait;
    use Property\InstrumentTypeTrait;
    use Property\MBIDTrait;

    /**
     * Constructs an instrument.
     *
     * @param array $instrument Information about an instrument
     */
    public function __construct(array $instrument = [])
    {
        $this->setRelationsFromArray($instrument);
        $this->setDescriptionFromArray($instrument);
        $this->setDisambiguationFromArray($instrument);
        $this->setInstrumentNameFromArray($instrument);
        $this->setInstrumentTypeFromArray($instrument);
        $this->setMbidFromArray($instrument);
    }

    /**
     * Returns the instrument name.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getInstrumentName();
    }
}
