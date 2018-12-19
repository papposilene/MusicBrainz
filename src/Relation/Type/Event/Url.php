<?php

namespace MusicBrainz\Relation\Type\Event;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\Type\Event;

/**
 * A relation between an event and an url
 *
 * @link https://musicbrainz.org/relationships/event-url
 */
abstract class Url extends Event
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::URL);
    }
}
