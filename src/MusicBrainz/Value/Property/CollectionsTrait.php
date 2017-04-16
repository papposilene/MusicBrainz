<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\CollectionList;

/**
 * Provides a getter for a list of collections.
 */
trait CollectionsTrait
{
    /**
     * A list of collections
     *
     * @var CollectionList
     */
    private $collections;

    /**
     * Returns a list of collections.
     *
     * @return CollectionList
     */
    public function getCollections(): CollectionList
    {
        return $this->collections;
    }
}
