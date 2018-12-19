<?php

namespace MusicBrainz\Relation\Type\Label\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Label\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This points to the VIAF page for this label. VIAF is an international project to make a common authority file
 * available to libraries across the world. An authority file is similar to an MBID for libraries.
 *
 * @see  https://viaf.org/
 * @see  https://en.wikipedia.org/wiki/Virtual_International_Authority_File
 * @link https://musicbrainz.org/relationship/c4bee4f4-e622-4c74-b80b-585989de27f4
 */
class Viaf extends OtherDatabases
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
