<?php

namespace MusicBrainz\Relation\Type\Artist\Work;

use MusicBrainz\Relation\Type\Artist\Work;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "composed" relation
 *
 * @link https://musicbrainz.org/relationship/cc9fcb45-7ab5-4629-bc5f-277f2592fa5a
 */
abstract class Composed extends Work
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('composition');
    }
}
