<?php

namespace MusicBrainz\Relation\Type\ReleaseGroup;

use MusicBrainz\Value\EntityType;

/**
 * A relation between a release group and an url
 *
 * @link https://musicbrainz.org/relationships/release_group-url
 */
abstract class Url extends \MusicBrainz\Relation\Type\Recording
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
