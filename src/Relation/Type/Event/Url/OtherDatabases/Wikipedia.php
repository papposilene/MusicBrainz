<?php

namespace MusicBrainz\Relation\Type\Event\Url\OtherDatabases;

use MusicBrainz\Relation\Type\Event\Url\OtherDatabases;
use MusicBrainz\Value\Name;

/**
 * Points to the Wikipedia page for this event.
 *
 * @see  https://www.wikipedia.org
 * @link https://musicbrainz.org/relationship/08a982f7-d754-39b2-8315-d7cae474c641
 */
class Wikipedia extends OtherDatabases
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
