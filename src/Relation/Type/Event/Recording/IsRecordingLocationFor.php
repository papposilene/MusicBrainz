<?php

namespace MusicBrainz\Relation\Type\Recording\Recording;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Event\Recording;

/**
 * An "is recording location for" relation
 * Links a recording to the event it was recorded at.
 *
 * @link https://musicbrainz.org/relationship/b06e6732-2603-47d3-8a49-9f589b430483
 */
class IsRecordingLocationFor extends Recording
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('recorded at');
    }
}
