<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "audio engineered" relation
 *
 * This describes an engineer involved with the machines used to generate sound, such as effects processors and digital
 * audio equipment used to modify or manipulate sound in either an analogue or digital form.
 *
 * @link https://musicbrainz.org/relationship/ca8d6d99-b847-439c-b0ec-33d8a1b942bc
 */
class AudioEngineered extends Engineered
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('audio');
    }
}