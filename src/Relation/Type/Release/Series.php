<?php

namespace MusicBrainz\Relation\Type\Release;

use MusicBrainz\Value\EntityType;

/**
 * A relation between a series and a series
 *
 * @link https://musicbrainz.org/relationships/series-series
 */
abstract class Series extends \MusicBrainz\Relation\Type\Recording
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
