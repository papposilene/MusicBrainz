<?php

namespace MusicBrainz\Filter\Search;
use AskLucy\Phrase;
use AskLucy\Term;
use MusicBrainz\Value\Country;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\Disambiguation;
use MusicBrainz\Value\IPI;
use MusicBrainz\Value\LabelCode;
use MusicBrainz\Value\LabelType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Value\Tag;

/**
 * A filter for searching labels
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search#Label
 */
class LabelFilter extends AbstractFilter
{
    /**
     * An alias attached to the label
     *
     * @var string
     */
    public const ALIAS_NAME = 'alias';

    /**
     * The label's main associated area
     *
     * @var string
     */
    public const AREA_NAME = 'area';

    /**
     * The label's founding date
     *
     * @var string
     */
    public const BEGIN_DATE = 'begin';

    /**
     * Label code (only the figures part, i.e. without "LC")
     *
     * @var string
     */
    public const LABEL_CODE = 'code';

    /**
     * The label's disambiguation comment
     *
     * @var string
     */
    public const DISAMBIGUATION = 'comment';

    /**
     * The two letter country code of the label country
     *
     * @var string
     */
    public const COUNTRY_CODE = 'country';

    /**
     * The label's dissolution date
     *
     * @var string
     */
    public const END_DATE = 'end';

    /**
     * True if know ended even if do not know end date
     *
     * @var string
     */
    public const ENDED = 'ended';

    /**
     * The label's IPI code
     *
     * @var string
     */
    public const IPI_CODE = 'ipi';

    /**
     * The MusicBrainz ID (MBID) of the label
     *
     * @var string
     */
    public const LABEL_ID = 'laid';

    /**
     * The name of the label (with accents)
     *
     * @var string
     */
    public const LABEL_NAME_WITH_ACCENTS = 'labelaccent';

    /**
     * The name of the label (without accents)
     *
     * @var string
     */
    public const LABEL_NAME_WITHOUT_ACCENTS = 'label';

    /**
     * The label's sort name
     *
     * @var string
     */
    public const LABEL_SORT_NAME = 'sortname';

    /**
     * The label's type
     *
     * @var string
     */
    public const LABEL_TYPE = 'type';

    /**
     * A tag attached to the label
     *
     * @var string
     */
    public const TAG = 'tag';

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
     * Adds the name of the label's main associated area.
     *
     * @param Name $areaName The name of the label's main associated area
     *
     * @return Phrase
     */
    public function addAreaName(Name $areaName): Phrase
    {
        return $this->addPhrase($areaName, self::AREA_NAME);
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
     * Adds the label code.
     *
     * @param LabelCode $labelCode The label code
     *
     * @return Term
     */
    public function addLabelCode(LabelCode $labelCode): Term
    {
        return $this->addTerm($labelCode->getLabelCodeWithoutLcPrefix(), self::LABEL_CODE);
    }

    /**
     * Adds the labels's disambiguation comment.
     *
     * @param Disambiguation $disambiguation The labels's disambiguation comment
     *
     * @return Phrase
     */
    public function addDisambiguationComment(Disambiguation $disambiguation): Phrase
    {
        return $this->addPhrase($disambiguation, self::DISAMBIGUATION);
    }

    /**
     * Adds the 2-letter code (ISO 3166-1 alpha-2) for the labels's main associated country.
     *
     * @param Country $country The 2-letter code (ISO 3166-1 alpha-2) for the labels's main associated country
     *
     * @return Term
     */
    public function addCountryCode(Country $country): Term
    {
        return $this->addTerm($country, self::COUNTRY_CODE);
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
     * Adds a flag indicating whether or not the label has ended.
     *
     * @param bool $ended A flag indicating whether or not the label has ended
     *
     * @return Term
     */
    public function addEnded(bool $ended): Term
    {
        return $this->addTerm($ended, self::ENDED);
    }

    /**
     * Adds an IPI code associated with the label.
     *
     * @param IPI $ipiCode An IPI code associated with the label
     *
     * @return Term
     */
    public function addIpiCode(IPI $ipiCode): Term
    {
        return $this->addTerm($ipiCode, self::IPI_CODE);
    }

    /**
     * Adds the MusicBrainz Identifier (MBID) of the label.
     *
     * @param MBID $labelId The MusicBrainz Identifier (MBID) of the label
     *
     * @return Term
     */
    public function addLabelId(MBID $labelId): Term
    {
        return $this->addTerm($labelId, self::LABEL_ID);
    }

    /**
     * Adds the label's name (with accented characters).
     *
     * @param Name $labelNameWithAccents The label's name (with accented characters)
     *
     * @return Phrase
     */
    public function addLabelNameWithAccents(Name $labelNameWithAccents): Phrase
    {
        return $this->addPhrase($labelNameWithAccents, self::LABEL_NAME_WITH_ACCENTS);
    }

    /**
     * Adds the label's name (without accented characters).
     *
     * @param Name $labelNameWithoutAccents The label's name (without accented characters)
     *
     * @return Phrase
     */
    public function addLabelNameWithoutAccents(Name $labelNameWithoutAccents): Phrase
    {
        return $this->addPhrase($labelNameWithoutAccents, self::LABEL_NAME_WITHOUT_ACCENTS);
    }

    /**
     * Adds the label's sort name.
     *
     * @param Name $labelSortName The label's sort name
     *
     * @return Phrase
     */
    public function addLabelSortName(Name $labelSortName): Phrase
    {
        return $this->addPhrase($labelSortName, self::LABEL_SORT_NAME);
    }

    /**
     * Adds the label's type.
     *
     * @param LabelType $labelType The label's type
     *
     * @return Term
     */
    public function addLabelType(LabelType $labelType): Term
    {
        return $this->addTerm($labelType, self::LABEL_TYPE);
    }

    /**
     * Adds a tag attached to the label.
     *
     * @param Tag $tag A tag attached to the label
     *
     * @return Phrase
     */
    public function addTag(Tag $tag): Phrase
    {
        return $this->addPhrase($tag, self::TAG);
    }
}
