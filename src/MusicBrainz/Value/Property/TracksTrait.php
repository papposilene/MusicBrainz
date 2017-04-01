<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\TrackList;

/**
 * Provides a getter for a list of tracks.
 */
trait TracksTrait
{
    /**
     * A list of tracks
     *
     * @var TrackList
     */
    private $tracks;

    /**
     * Returns a list of tracks.
     *
     * @return TrackList
     */
    public function getTracks(): TrackList
    {
        return $this->tracks;
    }
}
