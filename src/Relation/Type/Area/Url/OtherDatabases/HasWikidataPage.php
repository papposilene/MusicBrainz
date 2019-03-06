<?php

namespace MusicBrainz\Relation\Type\Area\Url\OtherDatabases;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Url\OtherDatabases;

/**
 * An "has wikidata page" relation
 * Points to the Wikidata page for this area.
 *
 * @link https://musicbrainz.org/relationship/85c5256f-aef1-484f-979a-42007218a1c2
 */
class HasWikidataPage extends OtherDatabases
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('wikidata');
    }
}
