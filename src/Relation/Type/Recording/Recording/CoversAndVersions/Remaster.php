<?php

namespace MusicBrainz\Relation\Type\Recording\Recording\CoversAndVersions;

use MusicBrainz\Relation\Type\Recording\Recording\CoversAndVersions;
use MusicBrainz\Value\Name;

/**
 * This relationship type is deprecated! Different remasters should be merged.
 *
 * @link https://musicbrainz.org/relationship/b984b8d1-76f9-43d7-aa3e-0b3a46999dea
 */
class Remaster extends CoversAndVersions
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('remaster');
    }
}
