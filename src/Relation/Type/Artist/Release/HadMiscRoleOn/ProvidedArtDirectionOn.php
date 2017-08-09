<?php

namespace MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided art direction on" relation
 * This indicates that a person or agency did the art direction for the release.
 *
 * @link https://musicbrainz.org/relationship/f3b80a09-5ebf-4ad2-9c46-3e6bce971d1b
 */
class ProvidedArtDirectionOn extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('art direction');
    }
}
