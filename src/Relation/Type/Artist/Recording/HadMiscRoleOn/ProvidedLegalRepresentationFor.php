<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided legal representation for" relation
 * This indicates that a person or firm provided legal representation for the recording.
 *
 * @link https://musicbrainz.org/relationship/75e37b65-7b50-4080-bf04-8c59c66b5f65
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
