<?php

namespace MusicBrainz\Relation\Type\Artist\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Artist\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * This links an artist to its page in IMSLP.
 *
 * @see  http://www.imspl.org
 * @link https://musicbrainz.org/relationship/8147b6a2-ad14-4ce7-8f0a-697f9a31f68f
 */
class Imslp extends OtherDatabases
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('IMSLP');
    }
}
