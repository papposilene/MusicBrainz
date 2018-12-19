<?php

namespace MusicBrainz\Relation\Type\Area\Work\WrittenIn;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Work\WrittenIn;

/**
 * A "is lyricts writing area" relation
 * This links a work with the area its lyrics were written in.
 *
 * @link https://musicbrainz.org/relationship/43ba113b-968f-4fa9-93b2-73e60f954c90
 */
class IsLyricsWritingArea extends WrittenIn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('lyrics written in');
    }
}
