<?php

namespace MusicBrainz\Relation\Type\Place\Work\WrittenAt;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Place\Work\Commissioned;

/**
 * This links a work with the place it was arranged at.
 *
 * @link https://musicbrainz.org/relationship/fc206200-021c-4b28-97ea-36e4c1391068
 */
class IsArrangingAreaFor extends Commissioned
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('arranged at');
    }
}
