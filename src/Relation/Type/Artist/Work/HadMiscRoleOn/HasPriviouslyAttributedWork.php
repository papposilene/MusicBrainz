<?php

namespace MusicBrainz\Relation\Type\Artist\Work\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Work\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has priviously attributed work" relation
 * Indicates an artist (generally a composer) this work was previously attributed to, but who is currently confirmed
 * (or very strongly suspected) not to be the real author.
 *
 * @link https://musicbrainz.org/relationship/7231dcac-d2dc-4b4a-b218-ecea4123a4cd
 */
class HasPriviouslyAttributedWork extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('previous attribution');
    }
}
