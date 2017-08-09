<?php

namespace MusicBrainz\Relation\Type\Artist\Release;

use MusicBrainz\Relation\Type\Artist\Release;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "composed" relation
 *
 * @link https://musicbrainz.org/relationship/800a8a16-5426-4f4e-8dd6-9371d8bc8398
 */
abstract class Composed extends Release
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('composition');
    }
}
