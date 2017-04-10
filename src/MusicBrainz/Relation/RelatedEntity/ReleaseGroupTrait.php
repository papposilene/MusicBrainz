<?php

namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type release group.
 */
trait ReleaseGroupTrait
{
    /**
     * Sets the entity type release group.
     *
     * @return void
     */
    public function setEntityTypeReleaseGroup(): void
    {
        $this->setRelatedEntityType(new EntityType(EntityType::RELEASE_GROUP));
    }
}
