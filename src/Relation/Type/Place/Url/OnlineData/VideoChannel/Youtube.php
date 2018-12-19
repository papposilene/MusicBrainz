<?php

namespace MusicBrainz\Relation\Type\Place\Url\OnlineData\VideoChannel;

use MusicBrainz\Relation\Type\Place\Url\OnlineData\VideoChannel;
use MusicBrainz\Value\Name;

/**
 * This relationship type can be used to link a place to the equivalent entry in YouTube. URLs should follow the
 * format: http://www.youtube.com/user/<username>
 *
 * @see  https://www.youtube.com
 * @link https://musicbrainz.org/relationship/6a540e5b-58c6-4192-b6ba-dbc71ec8fcf0
 */
class Youtube extends VideoChannel
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
