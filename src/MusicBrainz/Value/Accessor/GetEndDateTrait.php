<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\Date;

/**
 * Provides a getter for the ending date.
 */
trait GetEndDateTrait
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
