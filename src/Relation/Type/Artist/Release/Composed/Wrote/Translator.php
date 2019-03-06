<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Composed\Wrote;

use MusicBrainz\Relation\Type\Artist\Release\Composed\Wrote;
use MusicBrainz\Value\Name;

/**
 * Indicates the person who translated the lyrics/libretto for this release.
 *
 * @link https://musicbrainz.org/relationship/4db37fec-eb67-45d3-b4fa-148a68135fbb
 */
class Translator extends Wrote
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('translator');
    }
}
