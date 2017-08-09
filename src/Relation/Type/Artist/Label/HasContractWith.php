<?php

namespace MusicBrainz\Relation\Type\Artist\Label;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label;

/**
 * An "has contract with" relation
 *
 * @link https://musicbrainz.org/relationship/e74a40e7-0f27-4e05-bdbd-eb10f5309472
 */
abstract class HasContractWith extends Label
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('contract');
    }
}
