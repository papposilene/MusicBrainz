<?php

namespace MusicBrainz\Relation\Type\Artist\Url;

use MusicBrainz\Relation\Type\Artist\Url;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has music at" relation
 *
 * @link https://musicbrainz.org/relationship/919db454-212f-495a-a9bb-f69631729953
 */
abstract class HasMusicAt extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('get the music');
    }
}
