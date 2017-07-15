<?php

namespace MusicBrainz\Filter\Browse\Relation\RelatedEntity;

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
        $this->setEntityType(new EntityType(EntityType::COLLECTION));
    }
}
