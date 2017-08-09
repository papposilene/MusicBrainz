<?php

namespace MusicBrainz\Relation\Type\Area\Instrument;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Instrument;

/**
 * An "is instrument origin of" relation
 * This relationship type links instruments to the areas they originate from.
 *
 * @link https://musicbrainz.org/relationship/0b67183b-9f36-4b09-b561-0fa531508f91
 */
class IsInstrumentOriginOf extends Instrument
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('instrument origin');
    }
}
