<?php

namespace MusicBrainz\Relation\Type\Artist\Event;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Event;

/**
 * An "is host at" relation
 * Links an event to its host/MC. Event hosts usually do introductions to the show or each song.
 *
 * @link https://musicbrainz.org/relationship/9b2d5b96-b4d9-4bce-b056-c369ced25e81
 */
class IsOrchestraAt extends Event
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('orchestra');
    }
}
