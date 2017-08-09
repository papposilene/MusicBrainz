<?php

namespace MusicBrainz\Relation\Type\Artist;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\Type\Artist;

/**
 * A relation between an artist and an event
 *
 * @link https://musicbrainz.org/relationships/artist-event
 */
abstract class Event extends Artist
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::EVENT);
    }
}
