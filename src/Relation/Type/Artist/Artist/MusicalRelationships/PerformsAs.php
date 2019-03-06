<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

/**
 * An "performs as" relation
 * This links an artist's performance name (a stage name or alias) with their legal name.
 *
 * https://musicbrainz.org/relationship/dd9886f2-1dfe-4270-97db-283f6839a666
 */
class PerformsAs extends MusicalRelationships
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('is person');
    }
}
