<?php

namespace MusicBrainz\Relation\Type\Event\Release;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Event\Release;

/**
 * A "provides release" relation
 * Links a release with an event where it was available. This is intended for event-exclusive releases and/or releases
 * available at events before the official launch date, not for every release in the merchandise stall.
 *
 * @link https://musicbrainz.org/relationship/de1f976a-d6af-342d-9220-d2485284e502
 */
class ProvidesRelease extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('available at');
    }
}
