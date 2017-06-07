<?php

namespace MusicBrainz\Filter\Search;

use AskLucy\Phrase;
use AskLucy\Term;
use MusicBrainz\Value\Address;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\Disambiguation;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Value\PlaceType;

/**
 * A filter for searching places
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search#Place
 */
class PlaceFilter extends AbstractFilter
{
    /**
     * The address of this place
     *
     * @var string
     */
    public const ADDRESS = 'address';

    /**
     * The aliases/misspellings for this place
     *
     * @var string
     */
    public const ALIAS_NAME = 'alias';

    /**
     * The name of the area, where the place is located
     *
     * @var string
     */
    public const AREA_NAME = 'area';

    /**
     * The beginning date of this place
     *
     * @var string
     */
    public const BEGIN_DATE = 'begin';

    /**
     * The disambiguation comment for this place
     *
     * @var string
     */
    public const DISAMBIGUATION = 'comment';

    /**
     * The ending date of this place
     *
     * @var string
     */
    public const END_DATE = 'end';

    /**
     * A flag indicating whether or not the place has ended
     *
     * @var string
     */
    public const ENDED = 'ended';

    /**
     * The latitude of this place
     *
     * @var string
     */
    public const LATITUDE = 'lat';

    /**
     * The longitude of this place
     *
     * @var string
     */
    public const LONGITUDE = 'long';

    /**
     * The MusicBrainz ID of the place
     *
     * @var string
     */
    public const PLACE_ID = 'pid';

    /**
     * The type of this place
     *
     * @var string
     */
    public const PLACE_TYPE = 'type';

    /**
     * Adds an address.
     *
     * @param Address $address An address
     *
     * @return Phrase
     */
    public function addAddress(Address $address): Phrase
    {
        return $this->addPhrase($address, self::ADDRESS);
    }

    /**
     * Adds an alias name.
     *
     * @param Name $aliasName An alias name
     *
     * @return Phrase
     */
    public function addAliasName(Name $aliasName): Phrase
    {
        return $this->addPhrase($aliasName, self::ALIAS_NAME);
    }

    /**
     * Adds the name of the area, where the place is located.
     *
     * @param Name $areaName The name of the area, where the place is located
     *
     * @return Phrase
     */
    public function addAreaName(Name $areaName): Phrase
    {
        return $this->addPhrase($areaName, self::AREA_NAME);
    }

    /**
     * Adds the beginning date of the place.
     *
     * @param Date $beginDate The beginning date of the place
     *
     * @return Term
     */
    public function addBeginDate(Date $beginDate): Term
    {
        return $this->addTerm($beginDate, self::BEGIN_DATE);
    }

    /**
     * Adds the disambiguation comment for this place.
     *
     * @param Disambiguation $disambiguation The disambiguation comment for this place
     *
     * @return Phrase
     */
    public function addDisambiguationComment(Disambiguation $disambiguation): Phrase
    {
        return $this->addPhrase($disambiguation, self::DISAMBIGUATION);
    }

    /**
     * Adds the label's ending date.
     *
     * @param Date $endDate The label's ending date
     *
     * @return Term
     */
    public function addEndDate(Date $endDate): Term
    {
        return $this->addTerm($endDate, self::END_DATE);
    }

    /**
     * Adds a flag indicating whether or not the place has ended.
     *
     * @param bool $ended A flag indicating whether or not the place has ended
     *
     * @return Term
     */
    public function addEnded(bool $ended): Term
    {
        return $this->addTerm($ended, self::ENDED);
    }

    /**
     * Adds latitude of the place.
     *
     * @param string $latitude The latitude of the place
     *
     * @return Term
     */
    public function addLatitude(string $latitude): Term
    {
        return $this->addTerm($latitude, self::LATITUDE);
    }

    /**
     * Adds longitude of the place.
     *
     * @param string $longitude The longitude of the place
     *
     * @return Term
     */
    public function addLongitude(string $longitude): Term
    {
        return $this->addTerm($longitude, self::LONGITUDE);
    }

    /**
     * Adds the MusicBrainz Identifier (MBID) of the place.
     *
     * @param MBID $placeId The MusicBrainz Identifier (MBID) of the place
     *
     * @return Term
     */
    public function addPlaceId(MBID $placeId): Term
    {
        return $this->addTerm($placeId, self::PLACE_ID);
    }

    /**
     * Adds the type of the place.
     *
     * @param PlaceType $placeType The type of the place
     *
     * @return Term
     */
    public function addPlaceType(PlaceType $placeType): Term
    {
        return $this->addTerm($placeType, self::PLACE_TYPE);
    }
}
