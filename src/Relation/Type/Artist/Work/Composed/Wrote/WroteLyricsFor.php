<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Work\Composed\Wrote;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "wrote lyrics for" relation
 * Indicates the lyricist for this work.
 *
 * @link https://musicbrainz.org/relationship/3e48faba-ec01-47fd-8e89-30e81161661c
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
