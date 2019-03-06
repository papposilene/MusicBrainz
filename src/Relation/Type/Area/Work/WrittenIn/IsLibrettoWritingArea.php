<?php

namespace MusicBrainz\Relation\Type\Area\Work\WrittenIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Work\WrittenIn;

/**
 * An "is libretto writing area" relation
 * This links a work with the area its libretto were written in.
 *
 * @link https://musicbrainz.org/relationship/69230b8a-aa15-46e5-b540-b6302d60eb22
 */
class IsLibrettoWritingArea extends WrittenIn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('libretto written in');
    }
}
