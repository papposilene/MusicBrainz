<?php

namespace MusicBrainz\Relation\Type\Event;

use MusicBrainz\Relation\Type\Event;
use MusicBrainz\Value\EntityType;

/**
 * A relation between an event and a release group
 *
 * @link https://musicbrainz.org/relationships/event-release_group
 */
abstract class ReleaseGroup extends Event
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::RELEASE_GROUP);
    }
}
