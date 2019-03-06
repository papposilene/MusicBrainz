<?php

namespace MusicBrainz\Relation\Type\Artist\Release\PerformedOn\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Release\PerformedOn\Performance;
use MusicBrainz\Value\Name;

/**
 * An "performed vocals on" relation
 * Indicates an artist that performed vocals on this release.
 *
 * @link https://musicbrainz.org/relationship/eb10f8a0-0f4c-4dce-aa47-87bcb2bc42f3
 */
class PerformedVocalsOn extends Performance
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('vocal');
    }
}
