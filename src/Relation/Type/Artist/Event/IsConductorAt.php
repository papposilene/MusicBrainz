<?php

namespace MusicBrainz\Relation\Type\Artist\Event;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Event;

/**
 * An "is conductor at" relation
 * Links an event to an artist that was a conductor in it.
 *
 * @link https://musicbrainz.org/relationship/92873f0d-12a7-4fb3-9eac-ff06c38c6a60
 */
class IsConductorAt extends Event
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('condictor');
    }
}
