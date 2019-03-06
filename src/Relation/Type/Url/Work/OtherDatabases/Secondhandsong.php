<?php

namespace MusicBrainz\Relation\Type\Url\Work\OtherDatabases;

use MusicBrainz\Relation\Type\Url\Work\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This is used to link a work to its corresponding page in SecondHandSongs database.
 *
 * @see  https://secondhandsongs.com/
 * @link https://musicbrainz.org/relationship/b80dff64-9560-445a-b824-c8b432d77a52
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
