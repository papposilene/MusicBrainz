<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\MediaList;
use MusicBrainz\Value\Medium;

/**
 * Provides a getter for a list of media.
 */
trait MediaTrait
{
    /**
     * A list of media
     *
     * @var Medium[]|MediaList
     */
    private $media;

    /**
     * Returns a list of media.
     *
     * @return Medium[]|MediaList
     */
    public function getMedia(): MediaList
    {
        return $this->media;
    }

    /**
     * Sets a list of media by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setMediaFromArray(array $input): void
    {
        $this->media = is_null($media = ArrayAccess::getArray($input, 'media'))
            ? new MediaList
            : new MediaList($media);
    }
}
