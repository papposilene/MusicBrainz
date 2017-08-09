<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocialNetworkPageAt;

use MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt\HasSocalNetworkPageAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has video channel at" relation
 * This links an artist to a channel, playlist, or user page on a video sharing site containing videos curated by it.
 *
 * @link https://musicbrainz.org/relationship/d86c9450-b6d0-4760-a275-e7547495b48b
 */
class HasVideoChannelAt extends HasSocalNetworkPageAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('video channel');
    }
}
