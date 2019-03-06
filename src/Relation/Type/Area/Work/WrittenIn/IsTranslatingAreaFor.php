<?php

namespace MusicBrainz\Relation\Type\Area\Work\WrittenIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Work\WrittenIn;

/**
 * A "is translating area for" relation
 * This links a work with the area it was translated in.
 *
 * @link https://musicbrainz.org/relationship/79a01829-749c-44c3-8b9e-65243b302f81
 */
class IsTranslatingAreaFor extends WrittenIn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('translated in');
    }
}
