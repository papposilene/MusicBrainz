<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\EventName;

/**
 * Provides a getter for an event name.
 */
trait EventNameTrait
{
    /**
     * The event name
     *
     * @var EventName
     */
    public $eventName;

    /**
     * Returns the event name.
     *
     * @return EventName
     */
    public function getEventName(): EventName
    {
        return $this->eventName;
    }
}
