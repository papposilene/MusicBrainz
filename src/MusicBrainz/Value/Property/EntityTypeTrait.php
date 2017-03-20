<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\EntityType;

/**
 * Provides a getter for the entity type.
 */
trait EntityTypeTrait
{
    /**
     * The type is used to state whether an entity is a person, a group, or something else.
     *
     * @var EntityType
     */
    private $entityType;

    /**
     * Returns the entity type.
     *
     * @return EntityType
     */
    public function getEntityType(): EntityType
    {
        return $this->entityType;
    }
}
