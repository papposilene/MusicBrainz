<?php

namespace MusicBrainz\Relation\Type\Artist\Artist\PersonalRelationships;

use MusicBrainz\Relation\Type\Artist\Artist\PersonalRelationships;
use MusicBrainz\Value\Name;

/**
 * An "is involved with" relation
 * Indicates that two persons were romantically involved with each other without being married.
 *
 * https://musicbrainz.org/relationship/fd3927ba-fd51-4fa9-bcc2-e83637896fe8
 */
class InvolvedWith extends PersonalRelationships
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('involved with');
    }
}
