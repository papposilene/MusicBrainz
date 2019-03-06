<?php

namespace MusicBrainz\Relation\Type\Url\Work\OnlineData\SocialNetwork;

use MusicBrainz\Relation\Type\Url\Work\OnlineData\SocalNetwork;
use MusicBrainz\Value\Name;

/**
 * This links an artist to the equivalent entry at PureVolume.
 *
 * @see  http://www.purevolume.com
 * @link https://musicbrainz.org/relationship/b6f02157-a9d3-4f24-9057-0675b2dbc581
 */
class Purevolume extends SocalNetwork
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
