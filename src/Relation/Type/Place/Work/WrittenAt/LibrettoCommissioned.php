<?php

namespace MusicBrainz\Relation\Type\Place\Work\WrittenAt;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Place\Work\Commissioned;

/**
 * This links a work with the place its libretto was written at.
 *
 * @link https://musicbrainz.org/relationship/f2144669-1eff-46e9-a8aa-2717c0b619f6
 */
class LibrettoCommissioned extends Commissioned
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('libretto written at');
    }
}
