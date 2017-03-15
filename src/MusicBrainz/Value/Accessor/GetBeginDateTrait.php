<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\Date;

/**
 * Provides a getter for the beginning date.
 */
trait GetBeginDateTrait
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
}
