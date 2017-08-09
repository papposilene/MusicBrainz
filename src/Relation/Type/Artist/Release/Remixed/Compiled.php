<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Remixed;

use MusicBrainz\Relation\Type\Artist\Release\Remixed;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "compiled on" relation
 * This indicates the person who selected the tracks and the sequence for a compilation. If the tracks are pitched or
 * blended into each other, it is more appropriate to credit this person as a DJ-mixer.
 *
 * @see  IsMixDjOn
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/2f81887a-8674-4d8b-bd48-8bfd4c6fa332
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
