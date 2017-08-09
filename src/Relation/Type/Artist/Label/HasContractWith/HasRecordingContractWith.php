<?php

namespace MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Label\HasContractWith;

/**
 * An "has recording contract" relation
 * This indicates that an artist had a recording contract with a label.
 *
 * @link https://musicbrainz.org/relationship/b336d682-592f-4486-9f45-3d5d59895bdc
 */
class HasRecordingContractWith extends HasContractWith
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('recording contract');
    }
}
