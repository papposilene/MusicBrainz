<?php

namespace MusicBrainz\Relation\Type;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\Type;

/**
 * A relation of an release
 */
abstract class Release extends Type
{
    /**
     * Returns the entity type of the base entity.
     *
     * @return EntityType
     */
    final public static function getBaseEntityType(): EntityType
    {
        return new EntityType(EntityType::RELEASE);
    }
}
