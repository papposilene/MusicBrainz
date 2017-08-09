<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "holds phonographic copyright" relation
 * This relationship indicates the artist is the phonographic copyright holder for this recording.
 *
 * @see  https://en.wikipedia.org/wiki/Sound_recording_copyright_symbol
 * @link https://musicbrainz.org/relationship/7fd5fbc0-fbf4-4d04-be23-417d50a4dc30
 */
class HoldsPhonographicCopyrightFor extends HadMiscRoleOn
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
