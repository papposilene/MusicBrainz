<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "wrote libretto for" relation
 * Indicates the librettist for this work.
 *
 * @link https://musicbrainz.org/relationship/7474ab81-486f-40b5-8685-3a4f8ea624cb
 */
class WroteLibrettoFor extends Wrote
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('librettist');
    }
}
