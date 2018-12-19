<?php

namespace MusicBrainz\Relation\Type\Event;

use MusicBrainz\Relation\Type\Event;
use MusicBrainz\Value\EntityType;

/**
 * A relation between an event and a series
 *
 * @link https://musicbrainz.org/relationships/event-series
 */
abstract class Series extends Event
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::SERIES);
    }
}
