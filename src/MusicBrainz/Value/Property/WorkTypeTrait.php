<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\WorkType;

/**
 * Provides a getter for the type of work.
 */
trait WorkTypeTrait
{
    /**
     * A type of work
     *
     * @var WorkType
     */
    private $workType;

    /**
     * Returns type of work.
     *
     * @return WorkType
     */
    public function getWorkType(): WorkType
    {
        return $this->workType;
    }
}
