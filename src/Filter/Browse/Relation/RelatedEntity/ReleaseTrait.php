<?php

namespace MusicBrainz\Filter\Browse\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type release.
 */
trait ReleaseTrait
{
    /**
     * Sets the entity type release.
     *
     * @return void
     */
    public function setEntityTypeRelease(): void
    {
        $this->setEntityType(new EntityType(EntityType::RELEASE));
    }
}
