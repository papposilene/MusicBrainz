<?php

namespace MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

/**
 * A "has recording contract" relation
 * This indicates a personal production label for an artist. A personal label is a small label (usually a subdivision of
 * a larger one) that exclusively handles releases by that artist.
 *
 * @link https://musicbrainz.org/relationship/fe16f2bd-d324-435a-8076-bcf43b805bd9
 */
class HasPersonalLabel extends HasContractWith
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('personal label');
    }
}
