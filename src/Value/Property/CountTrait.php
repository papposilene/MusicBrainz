<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Count;

/**
 * Provides a getter for the offset.
 */
trait CountTrait
{
    /**
     * The offset
     *
     * @var Count
     */
    private $count;

    /**
     * Returns the offset.
     *
     * @return Count
     */
    public function getCount(): Count
    {
        return $this->count;
    }

    /**
     * Sets the offset by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setCountFromArray(array $input): void
    {
        $this->count = is_null($count = ArrayAccess::getInteger($input, 'count'))
            ? new Count
            : new Count($count);
    }
}
