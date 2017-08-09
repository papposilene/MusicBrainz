<?php

namespace MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;

use MusicBrainz\Relation\Type\Artist\Release\HadMiscRoleOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "provided illustration on" relation
 * This indicates a person or agency who did design or illustration for the release.
 *
 * @link https://musicbrainz.org/relationship/307e95dd-88b5-419b-8223-b146d4a0d439
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
