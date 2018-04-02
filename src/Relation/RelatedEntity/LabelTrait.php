<?php
namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type label.
 */
trait LabelTrait
{
    /**
     * Sets the entity type label.
     *
     * @return void
     */
    public function setEntityTypeLabel(): void
    {
        $this->setEntityType(new EntityType(EntityType::LABEL));
    }
}
