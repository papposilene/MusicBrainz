<?php

namespace MusicBrainz\Relation\Type\Url\Work\OtherDatabases;

use MusicBrainz\Relation\Type\Url\Work\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * Points to the Wikidata page for this work, and will be used to fetch Wikipedia summaries and images.
 *
 * @see  https://www.wikidata.org
 * @link https://musicbrainz.org/relationship/587fdd8f-080e-46a9-97af-6425ebbcb3a2
 */
class Wikidata extends OtherDatabases
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
