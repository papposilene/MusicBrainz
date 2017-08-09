<?php

namespace MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided photography on" relation
 * This credits a person or agency whose photographs are included as part of a release.
 *
 * @link https://musicbrainz.org/relationship/0b58dc9b-9c49-4b19-bb58-9c06d41c8fbf
 */
class ProvidedPhotographyOn extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('photography');
    }
}
