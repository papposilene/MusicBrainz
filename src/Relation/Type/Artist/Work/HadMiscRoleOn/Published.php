<?php

namespace MusicBrainz\Relation\Type\Artist\Work\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Work\HadMiscRoleOn;
use MusicBrainz\Value\Label;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "commissioned" relation
 * Indicates the publisher of this work. This is not the same concept as the record label.
 *
 * @see  Label
 * @link https://musicbrainz.org/relationship/a442b140-830b-30b0-a4aa-2e36f098b6aa
 */
class Published extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('publishing');
    }
}
