<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\URL;

/**
 * Provides a getter for an URL.
 */
trait UrlTrait
{
    /**
     * The track number
     *
     * @var URL
     */
    public $url;

    /**
     * Returns the track.
     *
     * @return URL
     */
    public function getUrl(): URL
    {
        return $this->url;
    }

}
