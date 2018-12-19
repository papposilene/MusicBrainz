<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Misc;

use MusicBrainz\Relation\Type\Artist\Recording\Misc;
use MusicBrainz\Value\Label;
use MusicBrainz\Value\Name;

/**
 * Indicates the publisher of this recording. This is not the same concept as the record label.
 *
 * @see  Label
 * @link https://musicbrainz.org/relationship/9ef2ba0d-953c-43a9-b1b5-cf2ba5986406
 */
class Publishing extends Misc
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('publishing');
    }
}
