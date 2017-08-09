<?php

namespace MusicBrainz\Relation\Type\Artist\Event;

use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Relation\Type\Artist\Event;

/**
 * An "is guest performer at" relation
 * Links an event to a guest performer. Guest performers usually make short appearances during other artist's set.
 *
 * @link https://musicbrainz.org/relationship/292df906-98a6-307e-86e8-df01a579a321
 */
class IsGuestPerformerAt extends Event
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('guest performer');
    }
}
