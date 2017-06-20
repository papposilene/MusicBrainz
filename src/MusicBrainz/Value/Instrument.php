<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * An instrument
 *
 * @link https://musicbrainz.org/instruments
 */
class Instrument implements Value
{
    use Property\Description;
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
        $this->description    = new Description(isset($instrument['description']) ? $instrument['description'] : '');
        $this->disambiguation = new Disambiguation(isset($instrument['disambiguation']) ? (string) $instrument['disambiguation'] : '');
        $this->instrumentName = new InstrumentName(isset($instrument['name']) ? $instrument['name'] : []);
        $this->instrumentType = new InstrumentType(isset($instrument['type']) ? $instrument['type'] : []);
        $this->MBID           = new MBID(isset($instrument['id']) ? (string) $instrument['id'] : '');
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
