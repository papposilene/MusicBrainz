<?php

namespace MusicBrainz\Relation\Type\Artist\Place\HasEngineerPositionAt;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Place;

/**
 * An "has mastering engineer position at" relation
 * Describes the fact a person was contracted by a place as a mastering engineer.
 *
 * @link https://musicbrainz.org/relationship/98e2ad89-6641-4336-913d-db1515aaabcb
 */
class HasMasteringEngineerPosition extends Place
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('mastering engineer position');
    }
}
