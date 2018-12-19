<?php

namespace MusicBrainz\Relation\Type\Artist\Url\OnlineData\SocialNetwork;

use MusicBrainz\Relation\Type\Artist\Url\OnlineData\SocalNetwork;
use MusicBrainz\Value\Name;

/**
 * This links an artist to its profile at SoundCloud.
 *
 * @see  https://soundcloud.com
 * @link https://musicbrainz.org/relationship/89e4a949-0976-440d-bda1-5f772c1e5710
 */
class Soundcloud extends SocalNetwork
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
