<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided booking for" relation
 * This credits a person who was responsible for booking the studio or performance venue where the recording was recorded.
 *
 * @link https://musicbrainz.org/relationship/b1edc6f6-283d-4e32-b625-b96cfb192056
 */
class ProvidedBookingFor extends HadMiscRoleOn
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
