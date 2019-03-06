<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\ReleaseEvent;

/**
 * Provides a getter for a release event.
 */
trait ReleaseEventTrait
{
    /**
     * The release event
     *
     * @var ReleaseEvent
     */
    private $releaseEvent;

    /**
     * Returns the release event.
     *
     * @return ReleaseEvent
     */
    public function getReleaseEvent(): ReleaseEvent
    {
        return $this->releaseEvent;
    }
}
