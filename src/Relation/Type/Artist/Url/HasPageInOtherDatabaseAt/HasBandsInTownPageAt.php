<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has bandsintown page at" relation
 * This relationship type links an artist to its corresponding page at Bandsintown.
 *
 * @see  https://bandsintown.com
 * @link https://musicbrainz.org/relationship/ea45ed3d-2d5e-456e-8c32-94b6f51426e2
 */
class HasBandsInTownPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('bandsintown');
    }
}
