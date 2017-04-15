<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\EventType;

/**
 * Provides a getter for the event type.
 */
trait EventTypeTrait
{
    /**
     * The event type
     *
     * @var EventType
     */
    private $eventType;

    /**
     * Returns the event type.
     *
     * @return EventType
     */
    public function getEventType(): EventType
    {
        return $this->eventType;
    }
}
