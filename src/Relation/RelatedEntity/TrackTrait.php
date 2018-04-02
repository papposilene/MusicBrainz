<?php
namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type track.
 */
trait TrackTrait
{
    /**
     * Sets the entity type track.
     *
     * @return void
     */
    public function setEntityTypeTrack(): void
    {
        $this->setEntityType(new EntityType(EntityType::TRACK));
    }
}
