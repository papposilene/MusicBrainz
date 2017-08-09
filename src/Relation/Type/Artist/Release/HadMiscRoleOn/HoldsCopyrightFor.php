<?php

namespace MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "holds copyright for" relation
 * This relationship indicates the artist is the copyright holder for this release.
 *
 * @link https://musicbrainz.org/relationship/730b5251-7432-4896-8fc6-e1cba943bfe1
 */
class HoldsCopyrightFor extends HadMiscRoleOn
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
