<?php

namespace MusicBrainz\Relation\Type\Artist\Work;

use MusicBrainz\Relation\Type\Artist\Work;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "had misc role on" relation
 * Indicates a miscellaneous support role. This is usually stated in the liner notes of an album.
 *
 * @link https://musicbrainz.org/relationship/7d166271-99c7-3a13-ae96-d2aab758029d
 */
class HadMiscRoleOn extends Work
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
