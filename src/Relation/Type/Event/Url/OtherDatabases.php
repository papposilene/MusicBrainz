<?php

namespace MusicBrainz\Relation\Type\Event\Url;

use MusicBrainz\Relation\Type\Event\Url;
use MusicBrainz\Value\Name;

/**
 * This links an entity to the equivalent entry in another database. Please respect the whitelist.
 *
 * @see  https://musicbrainz.org/doc/Other_Databases_Relationship_Type/Whitelist
 * @link https://musicbrainz.org/relationship/1e06fb0b-831d-49cf-abfd-52acb5b56e05
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
