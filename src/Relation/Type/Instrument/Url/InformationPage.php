<?php

namespace MusicBrainz\Relation\Type\Instrument\Url;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Instrument\Url;

/**
 * Links an instrument with an information page..
 *
 * @link https://musicbrainz.org/relationship/0e62afec-12f3-3d0f-b122-956207839854
 */
class InformationPage extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('information page');
    }
}
