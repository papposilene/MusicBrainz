<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Misc;

use MusicBrainz\Relation\Type\Artist\Release\Misc;
use MusicBrainz\Value\Name;

/**
 * A "provided booking for" relation
 * This credits a person who was responsible for booking the studio or performance venue where the release was recorded.
 *
 * @link https://musicbrainz.org/relationship/b0f98226-7121-4db5-a69c-552e6d061da2
 */
class Booking extends Misc
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('booking');
    }
}
