<?php

namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type event.
 */
trait EventTrait
{
    /**
     * Sets the entity type event.
     *
     * @return void
     */
    public function setEntityTypeEvent(): void
    {
        $this->setRelatedEntityType(new EntityType(EntityType::EVENT));
    }
}
