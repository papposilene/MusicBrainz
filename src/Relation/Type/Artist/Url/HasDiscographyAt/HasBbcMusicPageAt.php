<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasDiscographyAt;

use MusicBrainz\Relation\Type\Artist\Url\HasDiscographyAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has BBC music page at" relation
 * This links an artist to that artist's page at BBC Music.
 *
 * @see  http://www.bbc.co.uk/music
 * @link https://musicbrainz.org/relationship/d028a975-000c-4525-9333-d3c8425e4b54
 */
class HasBbcMusicPageAt extends HasDiscographyAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('BBC Music page');
    }
}
