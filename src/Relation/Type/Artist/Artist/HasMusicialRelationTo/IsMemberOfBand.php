<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\HasMusicialRelationTo;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Artist\HasMusicialRelationTo;

/**
 * An "is member of band" relation
 * This indicates a person is a member of a group.
 *
 * @link https://musicbrainz.org/relationship/5be4c609-9afa-4ea0-910b-12ffb71e3821
 */
class IsMemberOfBand extends HasMusicialRelationTo
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('member of band');
    }
}
