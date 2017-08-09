<?php

namespace MusicBrainz\Relation\Type\Artist\Url;

use MusicBrainz\Relation\Type\Artist\Url;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has lyrics page at" relation
 * This relationship describes a URL where lyrics for the artist can be found.
 *
 * @link https://musicbrainz.org/relationship/e4d73442-3762-45a8-905c-401da65544ed
 */
class HasLyricsPageAt extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('lyrics');
    }
}
