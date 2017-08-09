<?php

namespace MusicBrainz\Relation\Type\Artist\Work\Composed\Arranged\ArrangedInstrumentOn;

use MusicBrainz\Relation\Type\Artist\Work\Composed\Arranged\ArrangedInstrumentOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "arranged instrument on" relation
 * This indicates the artist who arranged a tune into a form suitable for performance. 'Arrangement' is used as a
 * catch-all term for all processes that turn a composition into a form that can be played by a specific type of
 * ensemble.
 *
 * @link https://musicbrainz.org/relationship/0a1771e1-8639-4740-8a43-bdafc050c3da
 */
class Orchestrated extends ArrangedInstrumentOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('orchestrator');
    }
}
