<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has IMSLP page at" relation
 * This links an artist to its page in IMSLP.
 *
 * @see  http://www.imspl.org
 * @link https://musicbrainz.org/relationship/8147b6a2-ad14-4ce7-8f0a-697f9a31f68f
 */
class HasImslpPageAt extends HasPageInOtherDatabaseAt
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
