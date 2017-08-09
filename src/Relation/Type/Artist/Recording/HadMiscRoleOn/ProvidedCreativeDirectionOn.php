<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided creative direction on" relation
 * This credits a person or agency who provided some kind of general creative inspiration during the recording of this
 * recording, without actually contributing to the writing or performance.
 *
 * @link https://musicbrainz.org/relationship/0eb67a3e-796b-4394-ab6e-1224f43236b6
 */
class ProvidedCreativeDirectionOn extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('creative direction');
    }
}
