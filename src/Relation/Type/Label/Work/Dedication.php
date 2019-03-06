<?php

namespace MusicBrainz\Relation\Type\Label\Work;

use MusicBrainz\Relation\Type\Label\Work;
use MusicBrainz\Value\Name;

/**
 * This indicates that the organisation commissioned the work. This is most common for classical works, but also exists
 * in other genres to a degree.
 *
 * @link https://musicbrainz.org/relationship/762b17eb-e511-4cc0-836e-a081831c1754
 */
class Dedication extends Work
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('dedication');
    }
}
