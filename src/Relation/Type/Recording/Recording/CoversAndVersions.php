<?php

namespace MusicBrainz\Relation\Type\Recording\Recording;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Recording\Release;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @link https://musicbrainz.org/relationship/6a76ad99-cc5d-4ebc-a6e4-b2eb2eb3ad98
 */
abstract class CoversAndVersions extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('covers and versions');
    }
}
