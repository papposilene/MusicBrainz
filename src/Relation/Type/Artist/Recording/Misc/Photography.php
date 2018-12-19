<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Misc;

use MusicBrainz\Relation\Type\Artist\Recording\Misc;
use MusicBrainz\Value\Name;

/**
 * This credits a person or agency whose photographs are included as part of a recording.
 *
 * @link https://musicbrainz.org/relationship/a7e408a1-8c64-4122-9ec2-906068955187
 */
class Photography extends Misc
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('photography');
    }
}
