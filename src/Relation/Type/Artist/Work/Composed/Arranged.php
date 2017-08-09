<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Composed;

use MusicBrainz\Relation\Type\Artist\Work\Composed;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "arranged" relation
 * This indicates the artist who arranged a tune into a form suitable for performance. 'Arrangement' is used as a
 * catch-all term for all processes that turn a composition into a form that can be played by a specific type of
 * ensemble.
 *
 * @link https://musicbrainz.org/relationship/d3fd781c-5894-47e2-8c12-86cc0e2c8d08
 */
class Arranged extends Composed
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('arranger');
    }
}
