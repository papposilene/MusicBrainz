<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "mastered" relation
 *
 * This relationship type is deprecated! Please add mastering engineers at the release level.
 *
 * @link https://musicbrainz.org/relationship/30adb2d7-dbcc-4393-9230-2098510ce3c1
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
