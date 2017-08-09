<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;

use MusicBrainz\Relation\Type\Artist\Recording\PerformedOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "performed as chorus master on" relation
 * This indicates the chorus master of a choir which performed on this recording.
 *
 * @link https://musicbrainz.org/relationship/45115945-597e-4cb9-852f-4e6ba583fcc8
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
