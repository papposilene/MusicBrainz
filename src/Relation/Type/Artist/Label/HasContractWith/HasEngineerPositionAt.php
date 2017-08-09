<?php

namespace MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

/**
 * An "has engineer position" relation
 * This indicates that an artist was officially employed by a label as an engineer.
 *
 * @link https://musicbrainz.org/relationship/5f9374d2-a0fa-4958-8a6f-80ca67e4aaa5
 */
class HasEngineerPositionAt extends HasContractWith
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('engineer position');
    }
}
