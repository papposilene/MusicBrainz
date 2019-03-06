<?php

namespace MusicBrainz\Relation\Type\Artist\Label;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @link https://musicbrainz.org/relationship/e74a40e7-0f27-4e05-bdbd-eb10f5309472
 */
abstract class Contract extends Label
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
