<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "programmed" relation
 *
 * This links a release to the artist who did the programming for electronic instruments used on the release. In the
 * most cases, the 'electronic instrument' is either a synthesizer or a drum machine.
 *
 * @link https://musicbrainz.org/relationship/617063ad-dbb5-4877-9ba0-ba2b9198d5a7
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
