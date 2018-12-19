<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Release\Composed\Wrote;
use MusicBrainz\Value\Name;

/**
 * A "composed" relation
 * Indicates the composer for this release, i.e. the artist who wrote the music (not necessarily the lyrics).
 *
 * @link https://musicbrainz.org/relationship/01ce32b0-d873-4baa-8025-714b45c0c754
 */
class Composer extends Wrote
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('composer');
    }
}
