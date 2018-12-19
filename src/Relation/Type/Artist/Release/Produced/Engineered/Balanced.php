<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Release\Produced\Engineered;
use MusicBrainz\Value\Name;

/**
 * An "balanced" relation
 *
 * This links a release to the balance engineer who engineered it.
 *
 * @link https://musicbrainz.org/relationship/97169e5e-c978-486e-a5ea-da353ca9ea42
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
