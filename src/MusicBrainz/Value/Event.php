<?php

namespace MusicBrainz\Value;

/**
 * An event
 * An event refers to an organised event which people can attend, and is relevant to MusicBrainz. Generally this means
 * live performances, like concerts and festivals.
 *
 * @link https://musicbrainz.org/doc/Event
 */
class Event
{
    use Property\CancelledTrait;
    use Property\DisambiguationTrait;
    use Property\EventNameTrait;
    use Property\EventTypeTrait;
    use Property\LifeSpanTrait;
    use Property\MBIDTrait;
    use Property\TimeTrait;

    /**
     * Constructs an event.
     *
     * @param array $event Information about an event
     */
    public function __construct(array $event = [])
    {
        $this->cancelled      = new Cancelled(isset($event['cancelled']) ? $event['cancelled'] : false);
        $this->disambiguation = new Disambiguation(isset($event['disambiguation']) ? (string) $event['disambiguation'] : '');
        $this->eventName      = new EventName(isset($event['name']) ? $event['name'] : '');
        $this->eventType      = new EventType(isset($event['type']) ? $event['type'] : []);
        $this->lifeSpan       = new LifeSpan(isset($event['life-span']) ? $event['life-span'] : []);
        $this->MBID           = new MBID(isset($event['id']) ? (string) $event['id'] : '');
        $this->time           = new Time(isset($event['time']) ? (string) $event['time'] : '');
    }

    /**
     * Returns the event name.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getEventName();
    }
}
