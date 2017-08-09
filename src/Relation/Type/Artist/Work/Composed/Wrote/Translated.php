<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "translated" relation
 * Indicates the person who translated the lyrics/libretto for this work.
 *
 * @link https://musicbrainz.org/relationship/da6c5d8a-ce13-474d-9375-61feb29039a5
 */
class Translated extends Wrote
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('translator');
    }
}
