<?php

namespace MusicBrainz\Relation\Type\Artist\Release;

use MusicBrainz\Relation\Type\Artist\Release;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has mixed role on" relation
 * This indicates that the artist performed a role not covered by other relationship types.
 *
 * @link https://musicbrainz.org/relationship/0b63af5e-85b2-4891-8234-bddab251399d
 */
class HadMiscRoleOn extends Release
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
