<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ReleaseEventList;

/**
 * Provides a getter for a release event list.
 */
trait ReleaseEventListTrait
{
    /**
     * A list of release events
     *
     * @var ReleaseEventList
     */
    private $releaseEventList;

    /**
     * Returns the list of release events.
     *
     * @return ReleaseEventList
     */
    public function getReleaseEvent(): ReleaseEventList
    {
        return $this->releaseEventList;
    }
}
