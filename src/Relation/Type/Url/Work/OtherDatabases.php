<?php

namespace MusicBrainz\Relation\Type\Url\Work;

use MusicBrainz\Relation\Type\Url\Work;
use MusicBrainz\Value\Name;

/**
 * This links an entity to the equivalent entry in another database. Please respect the whitelist.
 *
 * @see  https://musicbrainz.org/doc/Other_Databases_Relationship_Type/Whitelist
 * @link https://musicbrainz.org/relationship/190ea031-4355-405d-a43e-53eb4c5c4ada
 */
class OtherDatabases extends Work
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
