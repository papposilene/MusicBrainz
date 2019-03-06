<?php

namespace MusicBrainz\Relation\Type\Place\Url\OnlineData\SocialNetwork;

use MusicBrainz\Relation\Type\Place\Url\OnlineData\SocalNetwork;
use MusicBrainz\Value\Name;

/**
 * This relationship type can be used to link a MusicBrainz place to the equivalent entry in Myspace.
 *
 * @see  https://myspace.com
 * @link https://musicbrainz.org/relationship/c809cb4a-2835-44fb-bc64-fd4882bd389c
 */
class Myspace extends SocalNetwork
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('myspace');
    }
}
