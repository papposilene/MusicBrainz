<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "recorded" relation
 *
 * This describes an engineer responsible for committing the performance to tape. This can be as complex as setting up
 * the microphones, amplifiers, and recording devices, or as simple as pressing the 'record' button on a 4-track.
 *
 * @link https://musicbrainz.org/relationship/023a6c6d-80af-4f88-ae69-f5f6213f9bf4
 */
class Recorded extends Engineered
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('recording');
    }
}
