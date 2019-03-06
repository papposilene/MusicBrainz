<?php

namespace MusicBrainz\Relation\Type\Place;

use MusicBrainz\Value\EntityType;

/**
 * A relation between a place and a url
 *
 * @link https://musicbrainz.org/relationships/place-url
 */
abstract class Url extends \MusicBrainz\Relation\Type\Place
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
