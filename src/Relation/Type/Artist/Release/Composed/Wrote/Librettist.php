<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Release\Composed\Wrote;
use MusicBrainz\Value\Name;

/**
 * Indicates the librettist for this release.
 *
 * @link https://musicbrainz.org/relationship/dd182715-ca2b-4e4b-80b1-d21742fda0dc
 */
class Librettist extends Wrote
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
