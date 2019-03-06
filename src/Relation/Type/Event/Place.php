<?php

namespace MusicBrainz\Relation\Type\Event;

use MusicBrainz\Relation\Type\Event;
use MusicBrainz\Value\EntityType;

/**
 * A relation between an event and a place
 *
 * @link https://musicbrainz.org/relationships/event-place
 */
abstract class Place extends Event
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::PLACE);
    }
}
