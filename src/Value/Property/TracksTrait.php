<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the list of tracks by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setTracksFromArray(array $input): void
    {
        $this->tracks = is_null($tracks = ArrayAccess::getArray($input, 'tracks'))
            ? new TrackList
            : new TrackList($tracks);
    }
}
