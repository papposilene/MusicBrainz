<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Time;

/**
 * Provides a getter for the time of day.
 */
trait TimeTrait
{
    /**
     * The time of day
     *
     * @var Time
     */
    public $time;

    /**
     * Returns the time of day.
     *
     * @return Time
     */
    public function getTime(): Time
    {
        return $this->time;
    }

}
