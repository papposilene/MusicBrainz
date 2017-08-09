<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "edited" relation
 *
 * This describes an engineer responsible for either connecting disparate elements of the audio recording, or otherwise
 * redistributing material recorded in the sessions. This is usually secondary, or additional to the work done by the
 * mix engineer. It can also involve streamlining a longer track to around the 3 minute mark in order to make it
 * suitable for radio play (a "radio edit").
 *
 * @link https://musicbrainz.org/relationship/f30c29d3-a3f1-420d-9b6c-a750fd6bc2aa
 */
class Edited extends Engineered
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('editor');
    }
}
