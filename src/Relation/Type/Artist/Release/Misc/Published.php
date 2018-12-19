<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Misc;

use MusicBrainz\Relation\Type\Artist\Release\Misc;
use MusicBrainz\Value\Label;
use MusicBrainz\Value\Name;

/**
 * A "published" relation
 * Indicates the publisher of this release. This is not the same concept as the record label.
 *
 * @see  Label
 * @link https://musicbrainz.org/relationship/7a573a01-8815-44db-8e30-693faa83fbfa
 */
class Published extends Misc
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('publishing');
    }
}
