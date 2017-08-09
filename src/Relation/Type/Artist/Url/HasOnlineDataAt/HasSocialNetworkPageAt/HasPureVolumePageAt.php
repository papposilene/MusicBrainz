<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocialNetworkPageAt;

use MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocalNetworkPageAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has PureVolume page at" relation
 * This links an artist to the equivalent entry at PureVolume.
 *
 * @see  http://www.purevolume.com
 * @link https://musicbrainz.org/relationship/b6f02157-a9d3-4f24-9057-0675b2dbc581
 */
class HasPureVolumePageAt extends HasSocalNetworkPageAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('purevolume');
    }
}
