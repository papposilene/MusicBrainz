<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Composed;

use MusicBrainz\Relation\Type\Artist\Release\Composition;
use MusicBrainz\Value\Name;

/**
 * A "wrote" relation
 * This relationship is used to link a release to the artist responsible for writing the music and/or the words (lyrics,
 * libretto, etc.), when no more specific information is available. If possible, the more specific composer, lyricist
 * and/or librettist types should be used, rather than this relationship type.
 *
 * @link https://musicbrainz.org/relationship/ca7a474a-a1cd-4431-9230-56a17f553090
 */
class Wrote extends Composition
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('writer');
    }
}
