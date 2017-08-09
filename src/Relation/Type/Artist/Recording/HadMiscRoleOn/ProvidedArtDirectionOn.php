<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided art direction on" relation
 * This indicates that a person or agency did the art direction for the recording.
 *
 * @link https://musicbrainz.org/relationship/9aae9a3d-7cc2-4eee-881d-b8b73d0ceef3
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
