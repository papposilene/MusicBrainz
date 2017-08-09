<?php

namespace MusicBrainz\Relation\Type\Artist\Url;

use MusicBrainz\Relation\Type\Artist\Url;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has discography at" relation
 * Indicates the official homepage for an artist.
 *
 * @link https://musicbrainz.org/relationship/d0c5cf3a-8afb-4d24-ad47-00f43dc509fe
 */
abstract class HasDiscographyAt extends Url
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
