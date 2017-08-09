<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt;

use MusicBrainz\Relation\Type\Artist\Url\HasOnlineDataAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has cound founding page at" relation
 * This links an artist to their profile at a crowdfunding site like Kickstarter or Indiegogo.
 *
 * @link https://musicbrainz.org/relationship/93883cf6-e818-4938-990e-75863f8db2d3
 */
class HasCroudFoundingPageAt extends HasOnlineDataAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('blog');
    }
}
