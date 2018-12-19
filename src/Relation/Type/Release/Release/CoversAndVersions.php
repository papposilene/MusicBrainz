<?php

namespace MusicBrainz\Relation\Type\Release\Release;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Recording\Release;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @link https://musicbrainz.org/relationship/3676d4aa-2fa7-435f-b83f-cdbbe4740938
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
