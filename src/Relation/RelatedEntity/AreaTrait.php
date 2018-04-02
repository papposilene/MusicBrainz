<?php
namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type area.
 */
trait AreaTrait
{
    /**
     * Sets the entity type area.
     *
     * @return void
     */
    public function setEntityTypeArea(): void
    {
        $this->setEntityType(new EntityType(EntityType::AREA));
    }
}
