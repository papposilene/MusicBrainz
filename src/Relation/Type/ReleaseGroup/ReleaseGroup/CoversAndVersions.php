<?php

namespace MusicBrainz\Relation\Type\ReleaseGroup\ReleaseGroup;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\ReleaseGroup\ReleaseGroup;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @link https://musicbrainz.org/relationship/38278b3b-30e6-304c-b0db-5ba701eb0268
 */
abstract class CoversAndVersions extends ReleaseGroup
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
