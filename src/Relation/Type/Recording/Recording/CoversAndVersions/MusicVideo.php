<?php

namespace MusicBrainz\Relation\Type\Recording\Recording\CoversAndVersions;

use MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered\Editor;
use MusicBrainz\Relation\Type\Recording\Recording\CoversAndVersions;
use MusicBrainz\Value\Name;

/**
 *T This is used to link a music video to the corresponding audio recording.
 *
 * @see Editor
 * @link https://musicbrainz.org/relationship/ce3de655-7451-44d1-9224-87eb948c205d
 */
class MusicVideo extends CoversAndVersions
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('music video');
    }
}
