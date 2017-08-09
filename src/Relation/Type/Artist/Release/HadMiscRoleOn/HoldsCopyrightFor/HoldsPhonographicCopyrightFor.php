<?php

namespace MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn\HoldsCopyrightFor;

use MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn\HoldsCopyrightFor;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided legal representation for" relation
 * This relationship indicates the artist is the phonographic copyright holder for this release.
 *
 * @see  https://en.wikipedia.org/wiki/Sound_recording_copyright_symbol
 * @link https://musicbrainz.org/relationship/01d3488d-8d2a-4cff-9226-5250404db4dc
 */
class HoldsPhonographicCopyrightFor extends HoldsCopyrightFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('phonographic copyright');
    }
}
