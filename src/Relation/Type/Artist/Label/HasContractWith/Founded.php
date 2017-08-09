<?php

namespace MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

/**
 * An "founded" relation
 * This relationship type can be used to link a label to the person(s) who founded it.
 *
 * @link https://musicbrainz.org/relationship/577996f3-7ff9-45cf-877e-740fb1267a63
 */
class Founded extends HasContractWith
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('founded');
    }
}
