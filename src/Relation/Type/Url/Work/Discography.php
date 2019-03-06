<?php

namespace MusicBrainz\Relation\Type\Url\Work;

use MusicBrainz\Relation\Type\Url\Work;
use MusicBrainz\Value\Name;

/**
 * Indicates the official homepage for an artist.
 *
 * @link https://musicbrainz.org/relationship/d0c5cf3a-8afb-4d24-ad47-00f43dc509fe
 */
abstract class Discography extends Work
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('discography');
    }
}
