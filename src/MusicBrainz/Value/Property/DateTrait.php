<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Date;

/**
 * Provides a getter for the date.
 */
trait DateTrait
{
    /**
     * The date
     *
     * @var Date
     */
    private $date;

    /**
     * Returns the date.
     *
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }
}
