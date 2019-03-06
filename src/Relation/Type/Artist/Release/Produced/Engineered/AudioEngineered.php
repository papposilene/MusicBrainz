<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;
use MusicBrainz\Value\Name;

/**
 * A "audio engineered" relation
 *
 * This describes an engineer involved with the machines used to generate sound, such as effects processors and digital
 * audio equipment used to modify or manipulate sound in either an analogue or digital form.
 *
 * @link https://musicbrainz.org/relationship/b04848d7-dbd9-4be0-9d8c-13df6d6e40db
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
