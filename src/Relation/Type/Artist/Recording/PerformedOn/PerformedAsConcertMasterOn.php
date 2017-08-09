<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "performed as concert master on" relation
 * This indicates an artist who was the concertmaster/leader for an orchestra or band on this recording.
 *
 * @link https://musicbrainz.org/relationship/ffeaa74f-8295-45ee-a2f2-7c0cc1f73b1e
 */
class PerformedAsConcertMasterOn extends PerformedOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('concertmaster');
    }
}
