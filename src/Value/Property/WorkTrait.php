<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Work;

/**
 * Provides a getter for a work.
 */
trait WorkTrait
{
    /**
     * The work number
     *
     * @var Work
     */
    public $work;

    /**
     * Returns the work.
     *
     * @return Work
     */
    public function getWork(): Work
    {
        return $this->work;
    }

    /**
     * Sets the work by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setWorkFromArray(array $input): void
    {
        $this->work = is_null($work = ArrayAccess::getArray($input, 'work'))
            ? new Work
            : new Work($work);
    }
}
