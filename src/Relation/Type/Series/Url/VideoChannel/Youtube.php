<?php

namespace MusicBrainz\Relation\Type\Series\Url\VideoChannel;

use MusicBrainz\Relation\Type\Series\Url\SocialNetwork;
use MusicBrainz\Value\Name;

/**
 * This relationship type can be used to link a series to the equivalent entry in YouTube. URLs should follow the
 * format: http://www.youtube.com/user/<username>.
 *
 * @see  https://www.youtube.com/
 * @link https://musicbrainz.org/relationship/4789521b-57b9-4689-9644-46de63190f66
 */
class Youtube extends SocialNetwork
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
