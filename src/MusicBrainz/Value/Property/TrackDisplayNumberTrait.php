<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\TrackNumber;

/**
 * Provides a getter for a track number.
 */
trait TrackDisplayNumberTrait
{
    /**
     * The track number
     *
     * @var TrackNumber
     */
    public $trackDisplayNumber;

    /**
     * Returns the track number.
     *
     * @return TrackNumber
     */
    public function getTrackDisplayNumber(): TrackNumber
    {
        return $this->trackDisplayNumber;
    }

}
