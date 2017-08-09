<?php

namespace MusicBrainz\Relation\Type\Artist\Recording\Remixed;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A "remixed" relation
 *  This links a recording to the person who remixed it by taking one or more other tracks, substantially altering them
 * and mixing them together with other material. Note that this includes the artist who created a mash-up or used
 * samples as well.
 *
 * @see  https://musicbrainz.org/doc/Terminology#Mix_terminology
 * @link https://musicbrainz.org/relationship/7950be4d-13a3-48e7-906b-5af562e39544
 */
class Remixed extends \MusicBrainz\Relation\Type\Artist\Recording\Remixed
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('remixer');
    }
}
