<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has VIAF page at" relation
 * This points to the VIAF page for this artist. VIAF is an international project to make a common authority file
 * available to libraries across the world. An authority file is similar to an MBID for libraries.
 *
 * @see  https://viaf.org/
 * @see  https://en.wikipedia.org/wiki/Virtual_International_Authority_File
 * @link https://musicbrainz.org/relationship/e8571dcc-35d4-4e91-a577-a3382fd84460
 */
class HasViafPageAt extends HasPageInOtherDatabaseAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('VIAF');
    }
}
