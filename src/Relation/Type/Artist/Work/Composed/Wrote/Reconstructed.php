<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "reconstructed" relation
 * This indicates an artist reconstructed a work (usually one where the score was lost) to make it ready for
 * performance.
 *
 * @link https://musicbrainz.org/relationship/cb887d1b-5267-4f3d-badb-5b3fba7349f6
 */
class Reconstructed extends Wrote
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
