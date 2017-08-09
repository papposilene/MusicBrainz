<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "performed orchestra on" relation
 * Indicates an orchestra that performed on this recording.
 *
 * @link https://musicbrainz.org/relationship/3b6616c5-88ba-4341-b4ee-81ce1e6d7ebb
 */
class PerformedOrchestraOn extends PerformedOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('performing orchestra');
    }
}
