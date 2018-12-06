<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Format;

/**
 * Provides a getter for the format.
 */
trait FormatTrait
{
    /**
     * The format
     *
     * @var Format
     */
    private $format;

    /**
     * Returns the format.
     *
     * @return Format
     */
    public function getFormat(): Format
    {
        return $this->format;
    }

    /**
     * Sets the format by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setFormatFromArray(array $input): void
    {
        $this->format = is_null($format = ArrayAccess::getString($input, 'format'))
            ? new Format
            : new Format($format);
    }
}
