<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasDiscographyAt;

use MusicBrainz\Relation\Type\Artist\Url\HasDiscographyAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has fanpage at" relation
 * This links an artist to a fan-created website.
 *
 * @link https://musicbrainz.org/relationship/f484f897-81cc-406e-96f9-cd799a04ee24
 */
class HasFanpageAt extends HasDiscographyAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('discography');
    }
}
