<?php

namespace MusicBrainz\Relation\Type\Event;

use MusicBrainz\Relation\Type\Event;
use MusicBrainz\Value\EntityType;

/**
 * A relation between an event and a release
 *
 * @link https://musicbrainz.org/relationships/event-release
 */
abstract class Release extends Event
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::RELEASE);
    }
}
