<?php

namespace MusicBrainz\Relation\Type\Artist\Recording;

use MusicBrainz\Relation\Type\Artist\Recording;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "produced" relation
 *
 * @link https://musicbrainz.org/relationship/b367fae0-c4b0-48b9-a40c-f3ae4c02cffc
 */
abstract class Produced extends Recording
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
