<?php

namespace MusicBrainz\Relation\Type\Place\Work\WrittenAt;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Place\Work\Commissioned;

/**
 * This links a work with the place it was composed at.
 *
 * @link https://musicbrainz.org/relationship/beaff7ea-771d-4f0d-aeb7-633bdddfa196
 */
class ComposedAt extends Commissioned
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('composed at');
    }
}
