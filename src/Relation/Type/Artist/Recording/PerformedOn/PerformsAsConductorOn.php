<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "performs as conductor on" relation
 * This indicates an artist who conducted an orchestra, band or choir on this recording.
 *
 * @link https://musicbrainz.org/relationship/234670ce-5f22-4fd0-921b-ef1662695c5d
 */
class PerformsAsConductorOn extends PerformedOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('conductor');
    }
}
