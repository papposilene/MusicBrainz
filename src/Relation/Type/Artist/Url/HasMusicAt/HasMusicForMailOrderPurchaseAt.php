<?php

namespace MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;

use MusicBrainz\Relation\Type\Artist\Url\HasMusicAt;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "has music for mail order purchase at" relation
 * This relationship type is used to link to a page where the artist's releases can be purchased for mail order.
 *
 * @link https://musicbrainz.org/relationship/611b1862-67af-4253-a64f-34adba305d1d
 */
class HasMusicForMailOrderPurchaseAt extends HasMusicAt
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('purchase for mail-order');
    }
}
