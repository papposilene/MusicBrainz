<?php

namespace MusicBrainz\Filter\Browse\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type recource.
 */
trait RecourceTrait
{
    /**
     * Sets the entity type recource.
     *
     * @return void
     */
    public function setEntityTypeRecource(): void
    {
        $this->setEntityType(new EntityType(EntityType::RESOURCE));
    }
}
