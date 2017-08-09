<?php

namespace MusicBrainz\Relation\Type\Artist\Artist;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist;

/**
 * An "has musicial relation to" relation
 *
 * @link https://musicbrainz.org/relationship/92859e2a-f2e5-45fa-a680-3f62ba0beccc
 */
abstract class HasMusicialRelationTo extends Artist
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('musicial relationships');
    }
}
