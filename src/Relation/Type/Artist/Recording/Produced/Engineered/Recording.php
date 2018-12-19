<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineer;
use MusicBrainz\Value\Name;

/**
 * This describes an engineer responsible for committing the performance to tape. This can be as complex as setting up
 * the microphones, amplifiers, and recording devices, or as simple as pressing the 'record' button on a 4-track.
 *
 * @link https://musicbrainz.org/relationship/a01ee869-80a8-45ef-9447-c59e91aa7926
 */
class Recording extends Engineer
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
