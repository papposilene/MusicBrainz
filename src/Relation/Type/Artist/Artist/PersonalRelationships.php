<?php

namespace MusicBrainz\Relation\Type\Artist\Artist;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist;

/**
 * @link https://musicbrainz.org/relationship/e794f8ff-b77b-4dfe-86ca-83197146ef10
 */
abstract class PersonalRelationships extends Artist
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('personal relationships');
    }
}
