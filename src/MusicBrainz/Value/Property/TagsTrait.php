<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\TagList;

/**
 * Provides a getter for a list of tags.
 */
trait TagsTrait
{
    /**
     * A list of tags associated to the artist
     *
     * @var TagList
     */
    private $tags;

    /**
     * Returns a list of tags associated to the artist.
     *
     * @return TagList
     */
    public function getTags(): TagList
    {
        return $this->tags;
    }
}
