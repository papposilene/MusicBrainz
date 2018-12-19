<?php

namespace MusicBrainz\Relation\Type\Instrument\Instrument\Children;

use MusicBrainz\Relation\Type\Instrument\Instrument\Children;
use MusicBrainz\Value\Name;

/**
 * Used when an instrument has a subtype.
 *
 * @link https://musicbrainz.org/relationship/d40b2bd3f-1457-3ceb-810d-57f87f0f74f0
 */
class Subtype extends Children
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('subtype');
    }
}
