<?php

namespace MusicBrainz\Filter\Search;

use AskLucy\Phrase;
use AskLucy\Term;
use MusicBrainz\Value\ArtistType;
use MusicBrainz\Value\Country;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\Disambiguation;
use MusicBrainz\Value\Gender;
use MusicBrainz\Value\IPI;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Value\Tag;

/**
 * A filter for searching artists
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search#Artist
 */
class ArtistFilter extends AbstractFilter
{
    /**
     * An alias attached to the artist
     *
     * @var string
     */
    public const ALIAS_NAME = 'alias';

    /**
     * The name of the artist's main associated area
     *
     * @var string
     */
    public const AREA_NAME = 'area';

    /**
     * The MusicBrainz Identifier (MBID) of the artist
     *
     * @var string
     */
    public const ARTIST_ID = 'arid';

    /**
     * The artist's name (with accented characters)
     *
     * @var string
     */
    public const ARTIST_NAME_WITH_ACCENTS = 'artistaccent';

    /**
     * The artist's name (without accented characters)
     *
     * @var string
     */
    public const ARTIST_NAME_WITHOUT_ACCENTS = 'artist';

    /**
     * The artist's sort name
     *
     * @var string
     */
    public const ARTIST_SORT_NAME = 'sortname';

    /**
     * The artist's type
     *
     * @var string
     */
    public const ARTIST_TYPE = 'type';

    /**
     * The name of the artist's beginning area
     *
     * @var string
     */
    public const BEGIN_AREA_NAME = 'beginarea';

    /**
     * The artist's beginning date
     *
     * @var string
     */
    public const BEGIN_DATE = 'begin';

    /**
     * The 2-letter code (ISO 3166-1 alpha-2) for the artist's main associated country, or “unknown”
     *
     * @var string
     */
    public const COUNTRY_CODE = 'country';

    /**
     * The artist's disambiguation comment
     *
     * @var string
     */
    public const DISAMBIGUATION = 'comment';

    /**
     * The name of the artist's ending area
     *
     * @var string
     */
    public const END_AREA_NAME = 'endarea';

    /**
     * The artist's ending date
     *
     * @var string
     */
    public const END_DATE = 'end';

    /**
     * A flag indicating whether or not the artist has ended
     *
     * @var string
     */
    public const ENDED = 'ended';

    /**
     * The artist's gender
     *
     * @var string
     */
    public const GENDER = 'gender';

    /**
     * An IPI code associated with the artist
     *
     * @var string
     */
    public const IPI_CODE = 'ipi';

    /**
     * A tag attached to the artist
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
     * Adds the name of the artist's main associated area.
     *
     * @param Name $areaName The name of the artist's main associated area
     *
     * @return Phrase
     */
    public function addAreaName(Name $areaName): Phrase
    {
        return $this->addPhrase($areaName, self::AREA_NAME);
    }

    /**
     * Adds the MusicBrainz Identifier (MBID) of the artist.
     *
     * @param MBID $artistId The MusicBrainz Identifier (MBID) of the artist
     *
     * @return Term
     */
    public function addArtistId(MBID $artistId): Term
    {
        return $this->addTerm($artistId, self::ARTIST_ID);
    }

    /**
     * Adds the artist's name (with accented characters).
     *
     * @param Name $artistNameWithAccents The artist's name (with accented characters)
     *
     * @return Phrase
     */
    public function addArtistNameWithAccents(Name $artistNameWithAccents): Phrase
    {
        return $this->addPhrase($artistNameWithAccents, self::ARTIST_NAME_WITH_ACCENTS);
    }

    /**
     * Adds the artist's name (without accented characters).
     *
     * @param Name $artistNameWithoutAccents The artist's name (without accented characters)
     *
     * @return Phrase
     */
    public function addArtistNameWithoutAccents(Name $artistNameWithoutAccents): Phrase
    {
        return $this->addPhrase($artistNameWithoutAccents, self::ARTIST_NAME_WITHOUT_ACCENTS);
    }

    /**
     * Adds the artist's sort name.
     *
     * @param Name $artistSortName The artist's sort name
     *
     * @return Phrase
     */
    public function addArtistSortName(Name $artistSortName): Phrase
    {
        return $this->addPhrase($artistSortName, self::ARTIST_SORT_NAME);
    }

    /**
     * Adds the artist's type.
     *
     * @param ArtistType $artistType The artist's type
     *
     * @return Term
     */
    public function addArtistType(ArtistType $artistType): Term
    {
        return $this->addTerm($artistType, self::ARTIST_TYPE);
    }

    /**
     * Adds the name of the artist's beginning area.
     *
     * @param Name $beginAreaName The name of the artist's beginning area
     *
     * @return Phrase
     */
    public function addBeginAreaName(Name $beginAreaName): Phrase
    {
        return $this->addPhrase($beginAreaName, self::BEGIN_AREA_NAME);
    }

    /**
     * Adds the artist's beginning date.
     *
     * @param Date $beginDate The artist's beginning date
     *
     * @return Term
     */
    public function addBeginDate(Date $beginDate): Term
    {
        return $this->addTerm($beginDate, self::BEGIN_DATE);
    }

    /**
     * Adds the 2-letter code (ISO 3166-1 alpha-2) for the artist's main associated country.
     *
     * @param Country $country The 2-letter code (ISO 3166-1 alpha-2) for the artist's main associated country
     *
     * @return Term
     */
    public function addCountryCode(Country $country): Term
    {
        return $this->addTerm($country, self::COUNTRY_CODE);
    }

    /**
     * Adds the artist's disambiguation comment.
     *
     * @param Disambiguation $disambiguation The artist's disambiguation comment
     *
     * @return Phrase
     */
    public function addDisambiguationComment(Disambiguation $disambiguation): Phrase
    {
        return $this->addPhrase($disambiguation, self::DISAMBIGUATION);
    }

    /**
     * Adds the name of the artist's ending area.
     *
     * @param Name $endAreaName The name of the artist's ending area
     *
     * @return Phrase
     */
    public function addEndAreaName(Name $endAreaName): Phrase
    {
        return $this->addPhrase($endAreaName, self::END_AREA_NAME);
    }

    /**
     * Adds the artist's ending date.
     *
     * @param Date $endDate The artist's ending date
     *
     * @return Term
     */
    public function addEndDate(Date $endDate): Term
    {
        return $this->addTerm($endDate, self::END_DATE);
    }

    /**
     * Adds a flag indicating whether or not the artist has ended.
     *
     * @param bool $ended A flag indicating whether or not the artist has ended
     *
     * @return Term
     */
    public function addEnded(bool $ended): Term
    {
        return $this->addTerm($ended, self::ENDED);
    }

    /**
     * Adds the artist's gender.
     *
     * @param Gender $gender The artist's gender
     *
     * @return Term
     */
    public function addGender(Gender $gender): Term
    {
        return $this->addTerm($gender, self::GENDER);
    }

    /**
     * Adds an IPI code associated with the artist.
     *
     * @param IPI $ipiCode An IPI code associated with the artist
     *
     * @return Term
     */
    public function addIpiCode(IPI $ipiCode): Term
    {
        return $this->addTerm($ipiCode, self::IPI_CODE);
    }

    /**
     * Adds a tag attached to the artist.
     *
     * @param Tag $tag A tag attached to the artist
     *
     * @return Phrase
     */
    public function addTag(Tag $tag): Phrase
    {
        return $this->addPhrase($tag, self::TAG);
    }
}
