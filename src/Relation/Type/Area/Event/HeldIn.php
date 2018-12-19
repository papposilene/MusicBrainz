<?php

namespace MusicBrainz\Relation\Type\Area\Event;

use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Area\Event;

/**
 * Links an event to the area where it was held. Only used if the exact place is unknown.
 *
 * @link https://musicbrainz.org/relationship/542f8484-8bc7-3ce5-a022-747850b2b928
 */
class HeldIn extends Event
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('held in');
    }
}
