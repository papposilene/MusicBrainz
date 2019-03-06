<?php

namespace MusicBrainz\Relation\Type\Instrument\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Event\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * Points to the Wikidata page for this instrument, and will be used to fetch Wikipedia summaries and images
 *
 * @see  https://www.wikidata.org
 * @link https://musicbrainz.org/relationship/1486fccd-cf59-35e4-9399-b50e2b255877
 */
class Wididata extends OtherDatabases
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
