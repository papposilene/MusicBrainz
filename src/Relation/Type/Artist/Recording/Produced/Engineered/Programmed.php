<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "programmed" relation
 *
 * This links a recording to the artist who did the programming for electronic instruments used on the recording. In the
 * most cases, the 'electronic instrument' is either a synthesizer or a drum machine.
 *
 * @link https://musicbrainz.org/relationship/36c50022-44e0-488d-994b-33f11d20301e
 */
class Programmed extends Engineered
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('programming');
    }
}
