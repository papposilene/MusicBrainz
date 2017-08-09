<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Produced;

use MusicBrainz\Relation\Type\Artist\Recording\Produced;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "engineered" relation
 *
 * This describes an engineer who performed a general engineering role.
 *
 * @link https://musicbrainz.org/relationship/5dcc52af-7064-4051-8d62-7d80f4c3c907
 */
class Engineered extends Produced
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
