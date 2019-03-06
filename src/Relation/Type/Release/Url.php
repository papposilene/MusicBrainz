<?php

namespace MusicBrainz\Relation\Type\Release;

use MusicBrainz\Value\EntityType;

/**
 * A relation between a release and an url
 *
 * @link https://musicbrainz.org/relationships/release-url
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
