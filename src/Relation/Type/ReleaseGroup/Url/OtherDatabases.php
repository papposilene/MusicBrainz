<?php

namespace MusicBrainz\Relation\Type\ReleaseGroup\Url;

use MusicBrainz\Relation\Type\ReleaseGroup\Url;
use MusicBrainz\Value\Name;

/**
 * This links an entity to the equivalent entry in another database. Please respect the whitelist.
 *
 * @see  https://musicbrainz.org/doc/Other_Databases_Relationship_Type/Whitelist
 * @link https://musicbrainz.org/relationship/38320e40-9f4a-3ae7-8cb2-3f3c9c5d856d
 */
class OtherDatabases extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('other databases');
    }
}
