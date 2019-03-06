<?php

namespace MusicBrainz\Relation\Type\Area\Url\OtherDatabases;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Url\OtherDatabases;

/**
 * An "has wikipedia page" relation
 * Points to the Wikipedia page for this area.
 *
 * @link https://musicbrainz.org/relationship/9228621d-9720-35c3-ad3f-327d789464ec
 */
class HasWikipediaPage extends OtherDatabases
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('wikipedia');
    }
}
