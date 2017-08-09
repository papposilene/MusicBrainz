<?php

namespace MusicBrainz\Relation\Type\Artist\Release;

use MusicBrainz\Relation\Type\Artist\Release;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "produced" relation
 *
 * @link https://musicbrainz.org/relationship/3172a175-7c9d-44ce-a8b7-9a9187b33762
 */
abstract class Produced extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('production');
    }
}
