<?php

namespace MusicBrainz\Relation\Type\Artist\Recording;

use MusicBrainz\Relation\Type\Artist\Recording;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "remixed" relation
 *
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/91109adb-a5a3-47b1-99bf-06f88130e875
 */
abstract class Remixed extends Recording
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('remixes and compilations');
    }
}
