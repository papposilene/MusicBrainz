<?php

namespace MusicBrainz\Relation\Type\Label\Release\Publishing\Copyright;

use MusicBrainz\Relation\Type\Label\Release\Publishing\Copyright;
use MusicBrainz\Value\Name;

/**
 * This relationship indicates the company that was the licensee of this release (that is, received a license for it
 * from other company).
 *
 * @link https://musicbrainz.org/relationship/e77cb4ab-a438-43ad-9200-0d9bbf68b378
 */
class Licensee extends Copyright
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('licensee');
    }
}
