<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt;

use MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has blog at" relation
 * This relationship type is used to link an artist to their blog.
 *
 * @link https://musicbrainz.org/relationship/eb535226-f8ca-499d-9b18-6a144df4ae6f
 */
class HasBlogAt extends HasOnlineDataAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('blog');
    }
}
