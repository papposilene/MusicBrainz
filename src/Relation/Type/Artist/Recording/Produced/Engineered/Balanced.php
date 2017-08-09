<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "balanced" relation
 *
 * This links a recording to the balance engineer who engineered it.
 *
 * @link https://musicbrainz.org/relationship/0748fa55-56b5-4ad5-8ce8-15b97f82a0c2
 */
class Balanced extends Engineered
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
