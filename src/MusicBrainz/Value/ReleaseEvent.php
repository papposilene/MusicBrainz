<?php

namespace MusicBrainz\Value;

/**
 * A release event
 */
class ReleaseEvent
{
    use Property\AreaTrait;
    use Property\DateTrait;

    /**
     * Constructs a release event.
     *
     * @param array $releaseEvent Array of information about the release event
     */
    public function __construct(array $releaseEvent = [])
    {
        $this->area = new Area(isset($releaseEvent['area']) ? $releaseEvent['area'] : []);
        $this->date = new Date(isset($releaseEvent['date']) ? $releaseEvent['date'] : []);
    }
}
