<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Date;

/**
 * Provides a getter for the ending date.
 */
trait EndDateTrait
{
    /**
     * The ending date
     *
     * @var Date
     */
    private $endDate;

    /**
     * Returns the ending date.
     *
     * @return Date
     */
    public function getEndDate(): Date
    {
        return $this->endDate;
    }
}
