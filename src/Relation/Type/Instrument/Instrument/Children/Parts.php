<?php

namespace MusicBrainz\Relation\Type\Instrument\Instrument\Children;

use MusicBrainz\Relation\Type\Instrument\Instrument\Children;
use MusicBrainz\Value\Name;

/**
 * Used when an instrument has another instrument as a part.
 *
 * @link https://musicbrainz.org/relationship/d5ee4568f-d8bd-321d-9426-0ff6819ae6b5
 */
class Parts extends Children
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('parts');
    }
}
