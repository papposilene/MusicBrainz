<?php

namespace MusicBrainz\Relation\Type\Instrument\Instrument\Children;

use MusicBrainz\Relation\Type\Instrument\Instrument\Children;
use MusicBrainz\Value\Name;

/**
 * Used when an instrument is related to another instrument.
 *
 * @link https://musicbrainz.org/relationship/0fd327f5-8be4-3b9a-8852-2982c1a830ee
 */
class RelatedTo extends Children
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('related to');
    }
}
