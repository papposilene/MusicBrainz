<?php

namespace MusicBrainz\Relation\Type\Instrument\Instrument;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Instrument\Instrument;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @link https://musicbrainz.org/relationship/12678b88-1adb-3536-890e-9b39b9a14b2d
 */
abstract class Children extends Instrument
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('children');
    }
}
