<?php

namespace MusicBrainz\Relation\Type\Artist\Release;

use MusicBrainz\Relation\Type\Artist\Release;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "remixed" relation
 *
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/d6b8f1d2-5431-4c97-9688-44f73213ee5b
 */
abstract class Remixed extends Release
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
