<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Produced;

use MusicBrainz\Relation\Type\Artist\Release\Production;
use MusicBrainz\Value\Name;

/**
 * A "engineered" relation
 *
 * This describes an engineer who performed a general engineering role.
 *
 * @link https://musicbrainz.org/relationship/87e922ba-872e-418a-9f41-0a63aa3c30cc
 */
class Engineered extends Production
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('engineer');
    }
}
