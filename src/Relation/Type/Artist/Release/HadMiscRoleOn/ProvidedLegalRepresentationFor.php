<?php

namespace MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided legal representation for" relation
 * This indicates that a person or firm provided legal representation for the release.
 *
 * @link https://musicbrainz.org/relationship/1a900189-53ba-442a-9406-49c43ddecb3f
 */
class ProvidedLegalRepresentationFor extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('legal representation');
    }
}
