<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Date;

/**
 * Provides accessors for the artist death date/band dissolution date.
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

    /**
     * Sets the ending date.
     *
     * @param Date $endDate The ending date
     *
     * @return self
     */
    public function setEndDate(Date $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
}
