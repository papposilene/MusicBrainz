<?php

namespace MusicBrainz\Relation\Type\Event\Url;

use MusicBrainz\Relation\Type\Area\Url;
use MusicBrainz\Value\Name;

/**
 * Indicates the official homepage for an event.
 *
 * @link https://musicbrainz.org/relationship/61187747-04d3-4d15-889a-0ceedaecf0aa
 */
class Crowdfunding extends Url
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('crowdfunding');
    }
}
