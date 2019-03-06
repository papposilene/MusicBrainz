<?php

namespace MusicBrainz\Relation\Type\Artist\Url;

use MusicBrainz\Relation\Type\Artist\Url;
use MusicBrainz\Value\Name;

/**
 * This links an entity to the equivalent entry in another database. Please respect the whitelist.
 *
 * @see  https://musicbrainz.org/doc/Other_Databases_Relationship_Type/Whitelist
 * @link https://musicbrainz.org/relationship/d94fb61c-fa20-4e3c-a19a-71a949fb2c55
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
