<?php

namespace MusicBrainz\Relation\Type\Artist\Recording;

use MusicBrainz\Relation\Type\Artist\Recording;
use MusicBrainz\Value\Name;

/**
 * This indicates that the artist performed a role not covered by other relationship types.
 *
 * @link https://musicbrainz.org/relationship/68330a36-44cf-4fa2-84e8-533c6fe3fc23
 */
class Misc extends Recording
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('misc');
    }
}
