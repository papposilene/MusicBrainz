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
     * @var null|Date
     */
    private $endDate;

    /**
     * Returns the ending date.
     *
     * @return null|Date
     */
    public function getEndDate(): ?Date
    {
        return $this->endDate;
    }

    /**
     * Sets the ending date.
     *
     * @param null|Date $endDate The ending date
     *
     * @return self
     */
    public function setEndDate(?Date $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
}
