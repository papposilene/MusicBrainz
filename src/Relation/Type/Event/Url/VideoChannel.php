<?php

namespace MusicBrainz\Relation\Type\Event\Url;

use MusicBrainz\Relation\Type\Area\Url;
use MusicBrainz\Value\Name;

/**
 * This links an event to a channel, playlist, or user page on a video sharing site containing videos curated by it.
 *
 * @see  https://en.wikipedia.org/wiki/Social_networking_service
 * @link https://musicbrainz.org/relationship/68f5fcaa-b58c-3bfe-9b7c-75c2b56e839a
 */
class VideoChannel extends Url
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
