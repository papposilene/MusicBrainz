<?php
namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type recording.
 */
trait RecordingTrait
{
    /**
     * Sets the entity type recording.
     *
     * @return void
     */
    public function setEntityTypeRecording(): void
    {
        $this->setEntityType(new EntityType(EntityType::RECORDING));
    }
}
