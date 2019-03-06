<?php

namespace MusicBrainz\Relation\Type\Place;

use MusicBrainz\Value\EntityType;

/**
 * A relation between a place and a release
 *
 * @link https://musicbrainz.org/relationships/place-release
 */
abstract class Release extends \MusicBrainz\Relation\Type\Place
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
