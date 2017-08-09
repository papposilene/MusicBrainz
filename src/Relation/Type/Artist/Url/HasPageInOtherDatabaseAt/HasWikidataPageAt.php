<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;

use MusicBrainz\Relation\Type\Artist\Url\HasPageInOtherDatabaseAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has Wikidata page at" relation
 * Points to the Wikidata page for this artist, and will be used to fetch Wikipedia summaries and images.
 *
 * @see  https://www.wikidata.org
 * @link https://musicbrainz.org/relationship/689870a4-a1e4-4912-b17f-7b2664215698
 */
class HasWikidataPageAt extends HasPageInOtherDatabaseAt
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
