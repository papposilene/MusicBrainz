<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Remixed;

use MusicBrainz\Relation\Type\Artist\Recording\Remixed;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "compiled on" relation
 * This indicates the person who selected the tracks and the sequence for a compilation. This applies to one long
 * recording which contains multiple songs, one after the other. If the tracks are pitched or blended into each other,
 * it is more appropriate to credit this person as a DJ-mixer.
 *
 * @see  IsMixDjOn
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/35ba2b3b-aaeb-4db1-bc5f-f42154e785d8
 */
class Compiled extends Remixed
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('compiler');
    }
}
