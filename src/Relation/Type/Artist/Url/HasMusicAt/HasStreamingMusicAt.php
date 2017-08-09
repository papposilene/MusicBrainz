<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;

use MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has streaming music at" relation
 * This relationship type is used to link an artist to a site where music can be legally streamed for free, e.g.
 * Spotify.
 *
 * @link https://musicbrainz.org/relationship/769085a1-c2f7-4c24-a532-2375a77693bd
 */
class HasStreamingMusicAt extends HasMusicAt
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
