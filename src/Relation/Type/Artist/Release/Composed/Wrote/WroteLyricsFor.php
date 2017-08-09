<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Release\Composed\Wrote;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "wrote lyrics for" relation
 * Indicates the lyricist for this release.
 *
 * @link https://musicbrainz.org/relationship/a2af367a-b040-46f8-af21-310f92dfe97b
 */
class WroteLyricsFor extends Wrote
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('lyricist');
    }
}
