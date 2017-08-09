<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "mastered" relation
 *
 * Indicates the mastering engineer for this work.
 *
 * @link https://musicbrainz.org/relationship/84453d28-c3e8-4864-9aae-25aa968bcf9e
 */
class Mastered extends Engineered
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('mastering');
    }
}
