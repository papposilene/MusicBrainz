<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Arranged;

use MusicBrainz\Relation\Type\Artist\Recording\Arranged;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "arranged vocals on" relation
 * This indicates the artist who arranged a tune into a form suitable for performance. 'Arrangement' is used as a
 * catch-all term for all processes that turn a composition into a form that can be played by a specific type of
 * ensemble.
 *
 * @link https://musicbrainz.org/relationship/8a2799e8-a7e2-41ce-a7da-b5f520687216
 */
class ArrangedVocalsOn extends Arranged
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('vocal arranger');
    }
}
