<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\EntityType;

/**
 * Provides a getter for the entity type.
 */
trait GetEntityTypeTrait
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
