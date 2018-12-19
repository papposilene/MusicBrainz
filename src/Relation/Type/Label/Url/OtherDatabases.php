<?php

namespace MusicBrainz\Relation\Type\Label\Url;

use MusicBrainz\Relation\Type\Label\Url;
use MusicBrainz\Value\Name;

/**
 * An "has page in other databases at" relation
 *
 * @link https://musicbrainz.org/relationship/83eca2b3-5ae1-43f5-a732-56fa9a8591b1
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
