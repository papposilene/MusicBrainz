<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocialNetworkPageAt\HasVideoChannelAt;

use MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocialNetworkPageAt\HasVideoChannelAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has YouTube channel at" relation
 * This links an artist to the equivalent entry at YouTube.
 *
 * @see  https://www.youtube.com
 * @link https://musicbrainz.org/relationship/6a540e5b-58c6-4192-b6ba-dbc71ec8fcf0
 */
class HasYouTubeChannelAt extends HasVideoChannelAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('youtube');
    }
}
