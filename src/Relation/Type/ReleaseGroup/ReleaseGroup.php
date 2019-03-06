<?php

namespace MusicBrainz\Relation\Type\ReleaseGroup;

use MusicBrainz\Value\EntityType;

/**
 * A relation between a release group and another release group
 *
 * @link https://musicbrainz.org/relationships/release_group-release_group
 */
abstract class ReleaseGroup extends \MusicBrainz\Relation\Type\ReleaseGroup
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
