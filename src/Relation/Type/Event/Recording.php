<?php

namespace MusicBrainz\Relation\Type\Event;

use MusicBrainz\Relation\Type\Event;
use MusicBrainz\Value\EntityType;

/**
 * A relation between an event and a recording
 *
 * @link https://musicbrainz.org/relationships/event-recording
 */
abstract class Recording extends Event
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::RECORDING);
    }
}
