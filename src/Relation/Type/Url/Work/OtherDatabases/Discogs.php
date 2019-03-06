<?php

namespace MusicBrainz\Relation\Type\Url\Work\OtherDatabases;

use MusicBrainz\Relation\Type\Url\Work\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This is used to link the Discogs page for this work.
 *
 * @see  https://www.discogs.com/
 * @link https://musicbrainz.org/relationship/d78b7280-eb9e-4a57-86c3-cedaa1aa2175
 */
class Discogs extends OtherDatabases
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('discogs');
    }
}
