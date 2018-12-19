<?php

namespace MusicBrainz\Relation\Type\Recording\Url;

use MusicBrainz\Relation\Type\Recording\Url;
use MusicBrainz\Value\Name;

/**
 * This relationship type is only used for grouping other relationship types.
 *
 * @link https://musicbrainz.org/relationship/f25e301d-b87b-4561-86a0-5d2df6d26c0a
 */
abstract class Production extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('production');
    }
}
