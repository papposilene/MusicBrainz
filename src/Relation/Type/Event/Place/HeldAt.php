<?php

namespace MusicBrainz\Relation\Type\Event\Event;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Event\Event;

/**
 * An "held at" relation
 * Links an event to the place where it was held.
 *
 * @link https://musicbrainz.org/relationship/e2c6f697-07dc-38b1-be0b-83d740165532
 */
class HeldAt extends Event
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('held at');
    }
}
