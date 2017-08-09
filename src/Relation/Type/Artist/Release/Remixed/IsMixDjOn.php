<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Remixed;

use MusicBrainz\Relation\Type\Artist\Release\Remixed;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "compiled on" relation
 * This links a DJ-mix to the artist who mixed it.
 *
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/9162dedd-790c-446c-838e-240f877dbfe2
 */
class IsMixDjOn extends Remixed
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('mix-DJ');
    }
}
