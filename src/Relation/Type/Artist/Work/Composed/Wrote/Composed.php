<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "composed" relation
 * Indicates the composer for this work, i.e. the artist who wrote the music (not necessarily the lyrics).
 *
 * @link https://musicbrainz.org/relationship/a255bca1-b157-4518-9108-7b147dc3fc68
 */
class Composed extends Wrote
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('writer');
    }
}
