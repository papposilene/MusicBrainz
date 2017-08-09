<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Remixed;

use MusicBrainz\Relation\Type\Artist\Release\Remixed;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "produced material sampled in" relation
 * Indicates that the release contains samples from material by the indicated artist. Use this only if you really cannot
 * figure out the particular recording that has been sampled.
 *
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/7ddb04ae-6c8a-41bd-95c2-392994d663db
 */
class ProducedMaterialSampledIn extends Remixed
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('samples from artist');
    }
}
