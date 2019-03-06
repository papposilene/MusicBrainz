<?php
namespace MusicBrainz\Filter\Property;

use AskLucy\Expression\Clause\Term;
use MusicBrainz\Value\Barcode;
use MusicBrainz\Value\MBID;

trait PlaceIdTrait
{
    use AbstractAdderTrait;

    /**
     * Returns the field name for the place ID.
     *
     * @return string
     */
    public static function placeId(): string
    {
        return 'pid';
    }

    /**
     * Adds the MusicBrainz Identifier (MBID) of a place.
     *
     * @param MBID $placeId The MusicBrainz Identifier (MBID) of a place
     *
     * @return Term
     */
    public function addPlaceId(MBID $placeId): Term
    {
        return $this->addTerm($placeId, self::placeId());
    }
}