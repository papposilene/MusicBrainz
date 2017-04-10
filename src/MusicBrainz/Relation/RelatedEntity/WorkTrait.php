<?php

namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type work.
 */
trait WorkTrait
{
    /**
     * Sets the entity type work.
     *
     * @return void
     */
    public function setEntityTypeWork(): void
    {
        $this->setRelatedEntityType(new EntityType(EntityType::WORK));
    }
}
