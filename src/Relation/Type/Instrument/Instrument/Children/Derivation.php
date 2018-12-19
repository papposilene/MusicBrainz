<?php

namespace MusicBrainz\Relation\Type\Instrument\Instrument\Children;

use MusicBrainz\Relation\Type\Instrument\Instrument\Children;
use MusicBrainz\Value\Name;

/**
 * Indicates that an instrument is derived from another instrument.
 *
 * @link https://musicbrainz.org/relationship/deaf1d50-e624-3069-91bd-88e51cafd605
 */
class Derivation extends Children
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('derivation');
    }
}
