<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships\IsSupportingMusicianFor;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships\IsSupportingMusicianFor;

/**
 * An "is instrumental supporting musician for" relation
 * Indicates a musician doing long-time instrumental support for another one on albums and/or at concerts. This is a
 * person-to-artist relationship that normally applies to well-known solo artists, although it can sometimes apply to
 * groups.
 *
 * @link https://musicbrainz.org/relationship/ed6a7891-ce70-4e08-9839-1f2f62270497
 */
class IsInstrumentalSupportingMusicianFor extends IsSupportingMusicianFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('instrumental supporting musician');
    }
}
