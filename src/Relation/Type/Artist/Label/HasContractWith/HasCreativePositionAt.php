<?php

namespace MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

/**
 * An "has creative position" relation
 * This indicates that an artist was officially employed by a label in a creative position, such as photographer or
 * graphic designer.
 *
 * @link https://musicbrainz.org/relationship/85d1947c-1986-42f0-947c-80aab72a548f
 */
class HasCreativePositionAt extends HasContractWith
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('creative position');
    }
}
