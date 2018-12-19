<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships\IsSupportingMusicianFor;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships\IsSupportingMusicianFor;

/**
 * An "is vocal supporting musician for" relation
 * Indicates a musician doing long-time vocal support for another one on albums and/or at concerts. This is a
 * person-to-artist relationship that normally applies to well-known solo artists, although it can sometimes apply to
 * groups.
 *
 * @link https://musicbrainz.org/relationship/610d39a4-3fa0-4848-a8c9-f46d7b5cc02e
 */
class IsVocalSupportingMusicianFor extends IsSupportingMusicianFor
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('vocal supporting musician');
    }
}
