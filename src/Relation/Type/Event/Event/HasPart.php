<?php

namespace MusicBrainz\Relation\Type\Event\Event;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Event\Event;

/**
 * An "has part" relation
 * This indicates that an event is made up of multiple parts (e.g. a festival happening on multiple venues over the
 * course of a few days).
 *
 * @link https://musicbrainz.org/relationship/65742183-b25c-469e-b094-ff6739e6699c
 */
class HasPart extends Event
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('parts');
    }
}