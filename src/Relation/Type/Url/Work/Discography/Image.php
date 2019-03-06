<?php

namespace MusicBrainz\Relation\Type\Url\Work\Discography;

use MusicBrainz\Relation\Type\Url\Work\Discography;
use MusicBrainz\Value\Name;

/**
 * An "has image at" relation
 * Indicates a pictorial image (JPEG, GIF, PNG) of an artist.
 *
 * @link https://musicbrainz.org/relationship/221132e9-e30e-43f2-a741-15afc4c5fa7c
 */
class Image extends Discography
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
