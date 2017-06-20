<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A release event
 */
class ReleaseEvent implements Value
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
        $this->date = new Date(isset($releaseEvent['date']) ? $releaseEvent['date'] : '');
    }

    /**
     * Returns the release event as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        if (empty((string) $this->getDate())) {
            $releaseEvent = (empty((string) $this->getArea()))
                ? ''
                : $this->getArea();
        } else {
            $releaseEvent = $this->getDate();
            $releaseEvent .= (empty((string) $this->getArea()))
                ? ''
                : ' (' . $this->getArea() . ')';
        }

        return $releaseEvent;
    }
}
