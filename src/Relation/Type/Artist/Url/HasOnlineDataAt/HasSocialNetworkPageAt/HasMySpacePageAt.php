<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocialNetworkPageAt;

use MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocalNetworkPageAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has Myspace page at" relation
 * This relationship type links an artist to their Myspace page.
 *
 * @see  https://myspace.com
 * @link https://musicbrainz.org/relationship/bac47923-ecde-4b59-822e-d08f0cd10156
 */
class HasMySpacePageAt extends HasSocalNetworkPageAt
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
