<?php

namespace MusicBrainz\Relation\Type\Place\Place;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Place\Recording;

/**
 * This indicates that a place is part of another place.
 *
 * @link https://musicbrainz.org/relationship/ff683f48-eff1-40ab-a58f-b128098ffe92
 */
class PartOf extends Recording
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('part of');
    }
}
