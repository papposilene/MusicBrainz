<?php

namespace MusicBrainz\Relation\Type\Label\Url\OnlineData;

use MusicBrainz\Relation\Type\Label\Url\OnlineData;
use MusicBrainz\Value\Name;

/**
 * This relationship type is used to link a label to its blog.
 *
 * @link https://musicbrainz.org/relationship/5261835c-0c23-4a63-94db-ad3a86bda846
 */
class HistorySite extends OnlineData
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('history site');
    }
}
