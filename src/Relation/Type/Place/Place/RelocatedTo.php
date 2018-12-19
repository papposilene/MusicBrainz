<?php

namespace MusicBrainz\Relation\Type\Place\Place;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Place\Recording;

/**
 * Indicates a place that moved from one location to another, while still being generally considered the same.
 *
 * @link https://musicbrainz.org/relationship/69c3ef7a-7fec-4e0a-ae6c-0b0535509528
 */
class RelocatedTo extends Recording
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('relocated to');
    }
}
