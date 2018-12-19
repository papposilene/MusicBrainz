<?php

namespace MusicBrainz\Relation\Type\Event;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\Type\Event;

/**
 * A relation between an event and an work
 *
 * @link https://musicbrainz.org/relationships/event-work
 */
abstract class Work extends Event
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::WORK);
    }
}
