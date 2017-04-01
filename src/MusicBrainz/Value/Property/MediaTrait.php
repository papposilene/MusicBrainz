<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\MediaList;

/**
 * Provides a getter for a list of media.
 */
trait MediaTrait
{
    /**
     * A list of media
     *
     * @var MediaList
     */
    private $media;

    /**
     * Returns a list of media.
     *
     * @return MediaList
     */
    public function getMedia(): MediaList
    {
        return $this->media;
    }
}
