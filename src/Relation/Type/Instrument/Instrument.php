<?php

namespace MusicBrainz\Relation\Type\Instrument;

use MusicBrainz\Value\EntityType;

/**
 * A relation between an instrument and another instrument
 *
 * @link https://musicbrainz.org/relationships/instrument-instrument
 */
abstract class Instrument extends \MusicBrainz\Relation\Type\Instrument
{
    /**
     * Returns the entity type of the related entity.
     *
     * @return EntityType
     */
    final public static function getRelatedEntityType(): EntityType
    {
        return new EntityType(EntityType::INSTRUMENT);
    }
}
