<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Arranged;

use MusicBrainz\Relation\Type\Artist\Recording\Arranged;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "arranged instrument on" relation
 * This indicates the artist who arranged a tune into a form suitable for performance. 'Arrangement' is used as a
 * catch-all term for all processes that turn a composition into a form that can be played by a specific type of
 * ensemble.
 *
 * @link https://musicbrainz.org/relationship/4820daa1-98d6-4f8b-aa4b-6895c5b79b27
 */
class ArrangedInstrumentOn extends Arranged
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('instrument arranger');
    }
}
