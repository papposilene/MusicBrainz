<?php

namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type collection.
 */
trait CollectionTrait
{
    /**
     * Sets the entity type collection.
     *
     * @return void
     */
    public function setEntityTypeCollection(): void
    {
        $this->setRelatedEntityType(new EntityType(EntityType::COLLECTION));
    }
}
