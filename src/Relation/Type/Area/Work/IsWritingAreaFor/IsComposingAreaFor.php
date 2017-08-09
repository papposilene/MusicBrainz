<?php

namespace MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor;

use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Work\IsWritingAreaFor;

/**
 * A "is composing area for" relation
 * This links a work with the area it was composed in.
 *
 * @link https://musicbrainz.org/relationship/5293c7f7-7950-4fef-b367-b0062b99c4e7
 */
class IsComposingAreaFor extends IsWritingAreaFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('composed in');
    }
}
