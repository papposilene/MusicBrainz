<?php

namespace MusicBrainz\Relation\Type\Artist\Series;

use MusicBrainz\Relation\Type\Artist\Release;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "toured" relation
 * This relationship links a concert tour to the artist(s) the tour is by.
 *
 * @link https://musicbrainz.org/relationship/f03d59f3-97db-424b-885e-e8be69d65225
 */
class Toured extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('tour');
    }
}
