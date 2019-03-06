<?php

namespace MusicBrainz\Relation\Type\Event\Url\VideoChannel;

use MusicBrainz\Relation\Type\Event\Url\VideoChannel;
use MusicBrainz\Value\Name;

/**
 * A "has a youtube channel at" relation
 * This relationship type can be used to link an event to the equivalent entry in YouTube. URLs should follow the
 * format: http://www.youtube.com/user/<username>
 *
 * @see  http://www.youtube.com
 * @link https://musicbrainz.org/relationship/fea46163-dc45-3af9-917e-1798f325d21a
 */
class YoutubeChannel extends VideoChannel
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
