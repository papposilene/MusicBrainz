<?php

namespace MusicBrainz\Relation\Type\Label\Release\Publishing\Copyright;

use MusicBrainz\Relation\Type\Label\Release\Publishing\Copyright;
use MusicBrainz\Value\Name;

/**
 * This relationship indicates the label is the phonographic copyright holder for this release.
 *
 * @link https://musicbrainz.org/relationship/287361d2-1dce-4d39-9f82-222b786e2b30
 */
class Licensed extends Copyright
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('licensed');
    }
}
