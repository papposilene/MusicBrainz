<?php

namespace MusicBrainz\Filter\Browse\Relation\RelatedEntity;

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
        $this->setEntityType(new EntityType(EntityType::PLACE));
    }
}
