<?php

namespace MusicBrainz\Relation\Type\Place\Url\OnlineData\SocialNetwork;

use MusicBrainz\Relation\Type\Place\Url\OnlineData\SocalNetwork;
use MusicBrainz\Value\Name;

/**
 * This links a place to its profile at SoundCloud.
 *
 * @see  https://soundcloud.com
 * @link https://musicbrainz.org/relationship/1cd2eb89-2997-4901-87e9-838ac9a68da9
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
