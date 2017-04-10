<?php

namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type place.
 */
trait PlaceTrait
{
    /**
     * Sets the entity type place.
     *
     * @return void
     */
    public function setEntityTypePlace(): void
    {
        $this->setRelatedEntityType(new EntityType(EntityType::PLACE));
    }
}
