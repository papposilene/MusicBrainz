<?php

namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type editor.
 */
trait EditorTrait
{
    /**
     * Sets the entity type editor.
     *
     * @return void
     */
    public function setEntityTypeEditor(): void
    {
        $this->setRelatedEntityType(new EntityType(EntityType::EDITOR));
    }
}
