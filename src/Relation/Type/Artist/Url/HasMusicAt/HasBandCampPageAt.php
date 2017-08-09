<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;

use MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has Bandcamp page at" relation
 * This links an artist to its page at Bandcamp.
 *
 * @see  https://bandcamp.com
 * @link https://musicbrainz.org/relationship/c550166e-0548-4a18-b1d4-e2ae423a3e88
 */
class HasBandCampPageAt extends HasMusicAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('bandcamp');
    }
}
