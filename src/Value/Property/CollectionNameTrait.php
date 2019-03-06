<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the collection name by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setCollectionNameFromArray(array $input): void
    {
        $this->collectionName = is_null($collectionName = ArrayAccess::getString($input, 'name'))
            ? new CollectionName
            : new CollectionName($collectionName);
    }
}
