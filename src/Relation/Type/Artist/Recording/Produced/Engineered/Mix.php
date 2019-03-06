<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineered;

use MusicBrainz\Relation\Type\Artist\Recording\PerfomedOn\Remixed;
use MusicBrainz\Relation\Type\Artist\Recording\Produced\Engineer;
use MusicBrainz\Value\Name;

/**
 * This describes an engineer responsible for using a mixing console to mix a recorded track into a single piece of
 * music suitable for release. For remixing, see remixer.
 *
 * @see  RemixesAndCompilations
 * @link https://musicbrainz.org/relationship/3e3102e1-1896-4f50-b5b2-dd9824e46efe
 */
class Mix extends Engineer
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('mix');
    }
}
