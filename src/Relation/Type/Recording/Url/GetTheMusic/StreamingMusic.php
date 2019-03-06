<?php

namespace MusicBrainz\Relation\Type\Recording\Url\GetTheMusic;

use MusicBrainz\Relation\Type\Recording\Url\GetTheMusic;
use MusicBrainz\Value\Name;

/**
 * This relationship type is used to link a track to a site where the track can be legally streamed for free, such as
 * Spotify for audio tracks or YouTube for videos.
 *
 * @link https://musicbrainz.org/relationship/7e41ef12-a124-4324-afdb-fdbae687a89c
 */
class StreamingMusic extends GetTheMusic
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('streaming music');
    }
}
