<?php

namespace MusicBrainz\Relation\Type\Artist\Release\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Release\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "performed as chorus master on" relation
 * This indicates the chorus master of a choir which performed on this release.
 *
 * @link https://musicbrainz.org/relationship/b9129850-73ec-4af5-803c-1c12b97e25d2
 */
class PerformedAsChorusMasterOn extends PerformedOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('chorus master');
    }
}
