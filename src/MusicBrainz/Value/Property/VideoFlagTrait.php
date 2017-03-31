<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\VideoFlag;

/**
 * Provides a getter for the video flag.
 */
trait VideoFlagTrait
{
    /**
     * The video flag
     *
     * @var VideoFlag
     */
    private $videoFlag;

    /**
     * Returns the video flag.
     *
     * @return VideoFlag
     */
    public function getVideoFlag(): VideoFlag
    {
        return $this->videoFlag;
    }
}
