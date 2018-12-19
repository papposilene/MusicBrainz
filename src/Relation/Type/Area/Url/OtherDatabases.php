<?php

namespace MusicBrainz\Relation\Type\Area\Url;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Url;

/**
 * This links an area to the equivalent entry in another database. Please respect the whitelist.
 *
 * @see  https://musicbrainz.org/doc/Other_Databases_Relationship_Type/Whitelist
 * @link https://musicbrainz.org/relationship/b879051b-10e6-43b4-a49a-efdecc695f02
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
