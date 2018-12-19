<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Performance\Performance;

use MusicBrainz\Relation\Type\Artist\Recording\Performance\Performance;
use MusicBrainz\Value\Name;

/**
 * Indicates an artist that performed vocals on this recording.
 *
 * @link https://musicbrainz.org/relationship/0fdbe3c6-7700-4a31-ae54-b53f06ae1cfa
 */
class Vocal extends Performance
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
