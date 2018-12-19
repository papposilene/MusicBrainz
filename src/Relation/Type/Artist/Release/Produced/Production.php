<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced;

use MusicBrainz\Value\Name;

/**
 * This indicates an artist who is responsible for the creative and practical day-to-day aspects involved with making a
 * musical recording.
 *
 * @link https://musicbrainz.org/relationship/8bf377ba-8d71-4ecc-97f2-7bb2d8a2a75f
 */
class Production extends \MusicBrainz\Relation\Type\Artist\Recording\Production
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('producer');
    }
}
