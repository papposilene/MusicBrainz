<?php

namespace MusicBrainz\Relation\Type\Instrument\Label;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Instrument\Instrument;

/**
 * This relationship links an instrument to the company that invented or designed it.
 *
 * @link https://musicbrainz.org/relationship/9a1365db-5cce-4be6-9a6c-fbf566b26913
 */
abstract class Invented extends Instrument
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('invented');
    }
}
