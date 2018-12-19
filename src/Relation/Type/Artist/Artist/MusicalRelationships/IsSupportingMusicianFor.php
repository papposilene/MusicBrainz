<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\MusicalRelationships;

/**
 * An "is supporting musician for" relation
 * Indicates an artist doing long-time instrumental or vocal support for another one on albums and/or at concerts. This
 * is a person-to-artist relationship that normally applies to well-known solo artists, although it can sometimes apply
 * to groups.
 *
 * @link https://musicbrainz.org/relationship/88562a60-2550-48f0-8e8e-f54d95c7369a
 */
class IsSupportingMusicianFor extends MusicalRelationships
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('supporting musician');
    }
}
