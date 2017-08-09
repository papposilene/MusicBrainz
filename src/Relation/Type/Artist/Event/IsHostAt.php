<?php

namespace MusicBrainz\Relation\Type\Artist\Event;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Event;

/**
 * An "is host at" relation
 * Links an event to its host/MC. Event hosts usually do introductions to the show or each song.
 *
 * @link https://musicbrainz.org/relationship/76e8523e-567c-3e44-a302-3c75e601fcc2
 */
class IsHostAt extends Event
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('host');
    }
}
