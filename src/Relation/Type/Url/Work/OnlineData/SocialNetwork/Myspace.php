<?php

namespace MusicBrainz\Relation\Type\Url\Work\OnlineData\SocialNetwork;

use MusicBrainz\Relation\Type\Url\Work\OnlineData\SocalNetwork;
use MusicBrainz\Value\Name;

/**
 * This relationship type links an artist to their Myspace page.
 *
 * @see  https://myspace.com
 * @link https://musicbrainz.org/relationship/bac47923-ecde-4b59-822e-d08f0cd10156
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
