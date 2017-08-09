<?php

namespace MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

/**
 * A "has personal publisher" relation
 * This indicates a personal publishing label for an artist. A personal publishing label is a small label (usually a
 * subdivision of a larger one) that exclusively handles the rights to works by that artist.
 *
 * @link https://musicbrainz.org/relationship/fe16f2bd-d324-435a-8076-bcf43b805bd9
 */
class HasPersonalPublisher extends HasContractWith
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('personal publisher');
    }
}
