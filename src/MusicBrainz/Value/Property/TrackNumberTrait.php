<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\TrackNumber;

/**
 * Provides a getter for a track number.
 */
trait TrackNumberTrait
{
    /**
     * The track number
     *
     * @var TrackNumber
     */
    public $trackNumber;

    /**
     * Returns the track number.
     *
     * @return TrackNumber
     */
    public function getTrackNumber(): TrackNumber
    {
        return $this->trackNumber;
    }

}
