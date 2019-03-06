<?php

namespace MusicBrainz\Relation\Type\Label;

use MusicBrainz\Value\EntityType;

/**
 * A relation between a label and another label
 *
 * @link https://musicbrainz.org/relationships/label-label
 */
abstract class Label extends \MusicBrainz\Relation\Type\Label
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::LABEL);
    }
}
