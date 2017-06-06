<?php

namespace MusicBrainz\Filter\Search;

use AskLucy\Phrase;
use AskLucy\Term;
use MusicBrainz\Value\AreaType;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\Disambiguation;
use MusicBrainz\Value\ISO31661Code;
use MusicBrainz\Value\ISO31662Code;
use MusicBrainz\Value\ISO31663Code;
use MusicBrainz\Value\ISO3166Code;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A filter for searching areas
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search#Area
 */
class AreaFilter extends AbstractFilter
{
    /**
     * An alias name
     *
     * @var string
     */
    public const ALIAS_NAME = 'alias';

    /**
     * The MusicBrainz Identifier (MBID) of the area
     *
     * @var string
     */
    public const AREA_ID = 'aid';

    /**
     * The name of the area
     *
     * @var string
     */
    public const AREA_NAME = 'area';

    /**
     * The area's sort name
     *
     * @var string
     */
    public const AREA_SORT_NAME = 'sortname';

    /**
     * The area's type
     *
     * @var string
     */
    public const AREA_TYPE = 'type';

    /**
     * The area's founding date
     *
     * @var string
     */
    public const BEGIN_DATE = 'begin';

    /**
     * The area's disambiguation comment
     *
     * @var string
     */
    public const DISAMBIGUATION = 'comment';

    /**
     * The areas ending date
     *
     * @var string
     */
    public const END_DATE = 'end';

    /**
     * A flag indicating whether or not the area has ended
     *
     * @var string
     */
    public const ENDED = 'ended';

    /**
     * An ISO 3166-1/2/3 code attached to the area
     *
     * @var string
     */
    public const ISO_3166_Code = 'iso';

    /**
     * An ISO 3166-1 code attached to the area
     *
     * @var string
     */
    public const ISO_3166_1_Code = 'iso1';

    /**
     * An ISO 3166-2 code attached to the area
     *
     * @var string
     */
    public const ISO_3166_2_Code = 'iso2';

    /**
     * An ISO 3166-3 code attached to the area
     *
     * @var string
     */
    public const ISO_3166_3_Code = 'iso3';

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
     * Adds the MusicBrainz Identifier (MBID) of the area.
     *
     * @param MBID $areaId The MusicBrainz Identifier (MBID) of the area
     *
     * @return Term
     */
    public function addAreaId(MBID $areaId): Term
    {
        return $this->addTerm($areaId, self::AREA_ID);
    }

    /**
     * Adds the area name.
     *
     * @param Name $areaName An area name
     *
     * @return Phrase
     */
    public function addAreaName(Name $areaName): Phrase
    {
        return $this->addPhrase($areaName, self::AREA_NAME);
    }

    /**
     * Adds the area's sort name.
     *
     * @param Name $areaSortName The area's sort name
     *
     * @return Phrase
     */
    public function addAreaSortName(Name $areaSortName): Phrase
    {
        return $this->addPhrase($areaSortName, self::AREA_SORT_NAME);
    }

    /**
     * Adds the area's type.
     *
     * @param AreaType $areaType The area's type
     *
     * @return Term
     */
    public function addAreaType(AreaType $areaType): Term
    {
        return $this->addTerm($areaType, self::AREA_TYPE);
    }

    /**
     * Adds the area's founding date.
     *
     * @param Date $beginDate The area's founding date
     *
     * @return Term
     */
    public function addBeginDate(Date $beginDate): Term
    {
        return $this->addTerm($beginDate, self::BEGIN_DATE);
    }

    /**
     * Adds the area's disambiguation comment.
     *
     * @param Disambiguation $disambiguation The area's disambiguation comment
     *
     * @return Phrase
     */
    public function addDisambiguationComment(Disambiguation $disambiguation): Phrase
    {
        return $this->addPhrase($disambiguation, self::DISAMBIGUATION);
    }

    /**
     * Adds the area's ending date.
     *
     * @param Date $endDate The area's ending date
     *
     * @return Term
     */
    public function addEndDate(Date $endDate): Term
    {
        return $this->addTerm($endDate, self::END_DATE);
    }

    /**
     * Adds a flag indicating whether or not the area has ended.
     *
     * @param bool $ended A flag indicating whether or not the area has ended
     *
     * @return Term
     */
    public function addEnded(bool $ended): Term
    {
        return $this->addTerm($ended, self::ENDED);
    }

    /**
     * Adds an ISO 3166-1/2/3 code attached to the area.
     *
     * @param ISO3166Code $iso3166Code An ISO 3166-1/2/3 code attached to the area
     *
     * @return Term
     */
    public function addIso3166Code(ISO3166Code $iso3166Code): Term
    {
        return $this->addTerm($iso3166Code, self::ISO_3166_Code);
    }

    /**
     * Adds an ISO 3166-1 code attached to the area.
     *
     * @param ISO31661Code $iso31661Code An ISO 3166-1 code attached to the area
     *
     * @return Term
     */
    public function addIso31661Code(ISO31661Code $iso31661Code): Term
    {
        return $this->addTerm($iso31661Code, self::ISO_3166_1_Code);
    }

    /**
     * Adds an ISO 3166-2 code attached to the area.
     *
     * @param ISO31662Code $iso31662Code An ISO 3166-2 code attached to the area
     *
     * @return Term
     */
    public function addIso31662Code(ISO31662Code $iso31662Code): Term
    {
        return $this->addTerm($iso31662Code, self::ISO_3166_2_Code);
    }

    /**
     * Adds an ISO 3166-3 code attached to the area.
     *
     * @param ISO31663Code $iso31663Code An ISO 3166-3 code attached to the area
     *
     * @return Term
     */
    public function addIso31663Code(ISO31663Code $iso31663Code): Term
    {
        return $this->addTerm($iso31663Code, self::ISO_3166_3_Code);
    }
}
