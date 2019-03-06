<?php

namespace MusicBrainz\Relation\Type\Url\Work\Discography;

use MusicBrainz\Relation\Type\Url\Work\Discography;
use MusicBrainz\Value\Name;

/**
 * An "has biography at" relation
 * This links an artist to an online biography for that artist.
 *
 * @link https://musicbrainz.org/relationship/78f75830-94e1-4138-8f8a-643e3bb21ce5
 */
class Biography extends Discography
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
