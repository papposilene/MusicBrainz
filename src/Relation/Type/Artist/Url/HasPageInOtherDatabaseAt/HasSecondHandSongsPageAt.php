<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has SecondHandSongs page at" relation
 * This is used to link an artist to its corresponding page in SecondHandSongs database.
 *
 * @see  https://secondhandsongs.com/
 * @link https://musicbrainz.org/relationship/79c5b84d-a206-4f4c-9832-78c028c312c3
 */
class HasSecondHandSongsPageAt extends HasPageInOtherDatabaseAt
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
