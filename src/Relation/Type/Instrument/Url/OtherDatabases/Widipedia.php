<?php

namespace MusicBrainz\Relation\Type\Instrument\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Event\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * Points to the Wikipedia page for this instrument.
 *
 * @see  https://www.wikipedia.org
 * @link https://musicbrainz.org/relationship/0b21fd997-c813-3bc6-99cc-c64323bd15d3
 */
class Widipedia extends OtherDatabases
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
