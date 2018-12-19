<?php

namespace MusicBrainz\Relation\Type\Label\Release\Publishing\Copyright;

use MusicBrainz\Relation\Type\Label\Release\Publishing\Copyright;
use MusicBrainz\Value\Name;

/**
 * This relationship indicates the label is the phonographic copyright holder for this release.
 *
 * @link https://musicbrainz.org/relationship/245a18e5d-b610-412f-acfc-c43ca835c24f
 */
class PhonographicCopyright extends Copyright
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('phonographic copyright');
    }
}
