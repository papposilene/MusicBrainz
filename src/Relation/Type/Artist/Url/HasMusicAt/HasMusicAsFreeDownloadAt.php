<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;

use MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has music as free download at" relation
 * Indicates a webpage where you can download an artist's work for free.
 *
 * @link https://musicbrainz.org/relationship/34ae77fe-defb-43ea-95d4-63c7540bac78
 */
class HasMusicAsFreeDownloadAt extends HasMusicAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('download for free');
    }
}
