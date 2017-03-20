<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Date;

/**
 * Provides a getter for the beginning date.
 */
trait BeginDateTrait
{
    /**
     * The beginning date
     *
     * @var Date
     */
    private $beginDate;

    /**
     * Returns the beginning date.
     *
     * @return Date
     */
    public function getBeginDate(): Date
    {
        return $this->beginDate;
    }
}
