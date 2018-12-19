<?php

namespace MusicBrainz\Relation\Type\Url;

use MusicBrainz\Value\EntityType;

/**
 * A relation between an URL and a work
 *
 * @link https://musicbrainz.org/relationships/series-work
 */
abstract class Work extends \MusicBrainz\Relation\Type\Series
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::WORK);
    }
}
