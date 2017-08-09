<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocialNetworkPageAt;

use MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocalNetworkPageAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has SoundCloud page at" relation
 * This links an artist to its profile at SoundCloud.
 *
 * @see  https://soundcloud.com
 * @link https://musicbrainz.org/relationship/89e4a949-0976-440d-bda1-5f772c1e5710
 */
class HasSoundCloudPageAt extends HasSocalNetworkPageAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('soundcloud');
    }
}
