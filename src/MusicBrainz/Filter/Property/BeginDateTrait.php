<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Date;

/**
 * Provides accessors for the artist birth date/band founding date.
 */
trait BeginDateTrait
{
    /**
     * The beginning date
     *
     * @var null|Date
     */
    private $beginDate;

    /**
     * Returns the beginning date.
     *
     * @return null|Date
     */
    public function getBeginDate(): ?Date
    {
        return $this->beginDate;
    }

    /**
     * Sets the beginning date.
     *
     * @param null|Date $beginDate The beginning date
     *
     * @return self
     */
    public function setBeginDate(?Date $beginDate): self
    {
        $this->beginDate = $beginDate;

        return $this;
    }
}
