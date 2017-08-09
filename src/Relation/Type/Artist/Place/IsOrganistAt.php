<?php

namespace MusicBrainz\Relation\Type\Artist\Place;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Place;

/**
 * An "is organist at" relation
 * This relationship links an organist to the place(s) (most commonly religious buildings) at which they are the
 * resident organist.
 *
 * @link https://musicbrainz.org/relationship/cad0dbab-c711-442a-a91c-05359f0228ce
 */
class IsOrganistAt extends Place
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('organist');
    }
}
