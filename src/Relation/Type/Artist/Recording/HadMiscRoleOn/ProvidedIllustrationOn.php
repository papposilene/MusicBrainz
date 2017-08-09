<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Recording\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided illustration on" relation
 * This indicates a person or agency who did design or illustration for the track.
 *
 * @link https://musicbrainz.org/relationship/4af8e696-2690-486f-87db-bc8ec2bfe859
 */
class ProvidedIllustrationOn extends HadMiscRoleOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('design/illustration');
    }
}
