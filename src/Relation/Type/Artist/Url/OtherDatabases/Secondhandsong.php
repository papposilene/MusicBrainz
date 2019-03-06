<?php

namespace MusicBrainz\Relation\Type\Artist\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Artist\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This is used to link an artist to its corresponding page in SecondHandSongs database.
 *
 * @see  https://secondhandsongs.com/
 * @link https://musicbrainz.org/relationship/79c5b84d-a206-4f4c-9832-78c028c312c3
 */
class Secondhandsong extends OtherDatabases
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('secondhandsongs');
    }
}
