<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;
use MusicBrainz\Value\Name;

/**
 * A "sound engineered" relation
 *
 * This describes an engineer responsible for ensuring that the sounds that the artists make reach the microphones
 * sounding pleasant, without unwanted resonance or noise. Sometimes known as acoustical engineering.
 *
 * @link https://musicbrainz.org/relationship/271306ca-c77f-4fe0-94bc-dd4b87ae0205
 */
class SoundEngineered extends Engineered
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('sound');
    }
}
