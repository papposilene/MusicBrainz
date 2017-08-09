<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "revised" relation
 * Indicates that an artist revised a work. In most cases, this will be the original composer revising the work at a later date.
 *
 * @link https://musicbrainz.org/relationship/eeb9c319-9fde-4313-b76d-29db1576aad8
 */
class Revised extends Wrote
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('revised');
    }
}
