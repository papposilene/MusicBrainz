<?php

namespace MusicBrainz\Value;

/**
 * A collection
 */
class Collection
{
    use Property\CollectionNameTrait;
    use Property\EditorNameTrait;
    use Property\EntityTypeTrait;
    use Property\MBIDTrait;

    /**
     * Constructs a collection.
     *
     * @param array $collection Information about the collection
     */
    public function __construct(array $collection = [])
    {
        $this->collectionName = new CollectionName(isset($collection['name']) ? $collection['name'] : '');
        $this->editorName     = new EditorName(isset($collection['editor']) ? $collection['editor'] : '');
        $this->entityType     = new EntityType(isset($collection['entity-type']) ? $collection['entity-type'] : '');
        $this->MBID           = new MBID(isset($collection['id']) ? $collection['id'] : '');
    }

    /**
     * Returns the collection name as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getCollectionName();
    }
}
