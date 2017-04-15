<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\CollectionName;

/**
 * Provides a getter for a collection name.
 */
trait CollectionNameTrait
{
    /**
     * The collection name
     *
     * @var CollectionName
     */
    public $collectionName;

    /**
     * Returns the collection name.
     *
     * @return CollectionName
     */
    public function getCollectionName(): CollectionName
    {
        return $this->collectionName;
    }
}
