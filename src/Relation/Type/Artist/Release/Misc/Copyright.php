<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Misc;

use MusicBrainz\Relation\Type\Artist\Release\Misc;
use MusicBrainz\Value\Name;

/**
 * This relationship indicates the artist is the copyright holder for this release.
 *
 * @link https://musicbrainz.org/relationship/730b5251-7432-4896-8fc6-e1cba943bfe1
 */
class Copyright extends Misc
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('copyright');
    }
}
