<?php

namespace MusicBrainz\Relation\Type\Recording\Recording\CoversAndVersions;

use MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered\Editor;
use MusicBrainz\Relation\Type\Recording\Recording\CoversAndVersions;
use MusicBrainz\Value\Name;

/**
 * This relationship type is deprecated! If two recordings are identical, please merge them.
 *
 * @see Editor
 * @link https://musicbrainz.org/relationship/f5f41b82-ecc7-488e-adf3-12356885d724
 */
class FirstTrackRelease extends CoversAndVersions
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('first track release');
    }
}
