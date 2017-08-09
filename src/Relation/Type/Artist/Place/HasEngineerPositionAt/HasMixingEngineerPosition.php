<?php

namespace MusicBrainz\Relation\Type\Artist\Place\HasEngineerPositionAt;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Place;

/**
 * An "has mixing engineer position at" relation
 * Describes the fact a person was contracted by a place as a mixing engineer.
 *
 * @link https://musicbrainz.org/relationship/67ed1d31-8993-442c-aa59-afdb6a89d2c2
 */
class HasMixingEngineerPosition extends Place
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('mixing engineer position');
    }
}
