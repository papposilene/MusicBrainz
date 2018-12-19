<?php

namespace MusicBrainz\Relation\Type\Release\Release;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Recording\Release;

/**
 * This relationship type is deprecated! Please enter a release with multiple discs as a single release containing
 * multiple discs.
 *
 * @link https://musicbrainz.org/relationship/7ad3c97e-e524-4d9a-a384-2b1407f4939b
 */
class PartOfSet extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('part of set');
    }
}
