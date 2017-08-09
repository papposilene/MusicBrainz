<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasDiscographyAt;

use MusicBrainz\Relation\Type\Artist\Url\HasDiscographyAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has biography at" relation
 * This links an artist to an online biography for that artist.
 *
 * @link https://musicbrainz.org/relationship/78f75830-94e1-4138-8f8a-643e3bb21ce5
 */
class HasBiographyAt extends HasDiscographyAt
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
