<?php

namespace MusicBrainz\Relation\Type\Instrument\Url;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Instrument\Url;

/**
 * A "has a picture at" relation
 * Links an instrument with a picture.
 *
 * @link https://musicbrainz.org/relationship/f64eacbd-1ea1-381e-9886-2cfb552b7d90
 */
class Image extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('image');
    }
}
