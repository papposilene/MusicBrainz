<?php

namespace MusicBrainz\Value;

/**
 * An artist
 *
 * @see https://musicbrainz.org/doc/Artist
 */
class Artist
{
    /**
     * The MusicBrainz Identifier (MBID)
     *
     * @var string
     *
     * @see https://musicbrainz.org/doc/MusicBrainz_Identifier
     */
    private $id;

    /**
     * The type is used to state whether an artist is a person, a group, or something else.
     *
     * @var ArtistType
     */
    private $type;

    /**
     * The relevance score for the search result
     *
     * @var Score
     */
    private $score;

    /**
     * The official name of the artist, be it a person or a band
     *
     * @var string
     */
    public $name;

    /**
     * The sort name is a variant of the artist name which would be used when sorting artists by name, such as in record
     * shops or libraries. Among other things, sort names help to ensure that all the artists that start with "The"
     * don't end up up under "T". The guidelines for sort names are the best place to check for more specific usage info.
     *
     * @var string
     */
    private $sortName;

    /**
     * The gender is used to explicitly state whether a person or character identifies as male, female or neither.
     * Groups have an undefined gender.
     *
     * @var Gender
     */
    private $gender;

    /**
     * The artist's country
     *
     * @var Country
     */
    private $country;

    /**
     * The artist area, as the name suggests, indicates the area with which an artist is primarily identified with. It
     * is often, but not always, its birth/formation country.
     *
     * @var Area
     */
    private $area;

    /**
     * The begin area indicates where an artist started its existence. Its exact meaning depends on the type of artist:
     *
     * - For a person: The person's birthplace
     * - For a group (or orchestra/choir): The area where the group first formed
     *
     * @var Area
     *
     * @see type
     */
    private $beginArea;

    /**
     * The end area indicates where an artist started its existence. Its exact meaning depends on the type of artist:
     *
     * - For a person: The person's place of death
     * - For a group (or orchestra/choir): The area when the group last dissolved
     * - For a character: The area (in real life) where the character concept was created
     * - For others: There are no clear indications about how to use dates for artists of the type "Other" at the moment.
     *
     * @var Area
     *
     * @see type
     */
    private $endArea;

    /**
     * A disambiguation comment
     *
     * @var string
     *
     * @see https://musicbrainz.org/doc/Disambiguation_Comment
     */
    private $disambiguation;

    /**
     * A list of IPI codes
     *
     * @var IPIList
     *
     * @see https://musicbrainz.org/doc/IPI
     */
    private $ipis;

    /**
     * The artist's life span
     *
     * @var LifeSpan
     */
    private $lifeSpan;

    /**
     * A list of aliases
     *
     * @var AliasList
     */
    private $aliases;

    /**
     * A list of tags associated to the artist
     *
     * @var TagList
     */
    private $tags;

    /**
     * Constructs an artist.
     *
     * @param array $artist Array of information about an artist
     */
    public function __construct(array $artist)
    {
        $this->id             = new MBID(isset($artist['id']) ? (string) $artist['id'] : '');
        $this->type           = new ArtistType(isset($artist['type']) ? (string) $artist['type'] : '');
        $this->score          = new Score(isset($artist['score']) ? (int) $artist['score'] : 0);
        $this->name           = isset($artist['name']) ? (string) $artist['name'] : '';
        $this->sortName       = isset($artist['sort-name']) ? (string) $artist['sort-name'] : '';
        $this->gender         = new Gender(isset($artist['gender']) ? (string) $artist['gender'] : Gender::UNDEFINED);
        $this->country        = new Country(isset($artist['country']) ? (string) $artist['country'] : '');
        $this->area           = new Area(isset($artist['area']) ? $artist['area'] : []);
        $this->beginArea      = new Area(isset($artist['begin-area']) ? $artist['begin-area'] : []);
        $this->endArea        = new Area(isset($artist['end-area']) ? $artist['end-area'] : []);
        $this->disambiguation = isset($artist['disambiguation']) ? (string) $artist['disambiguation'] : '';
        $this->ipis           = new IPIList(isset($artist['ipis']) ? $artist['ipis'] : []);
        $this->lifeSpan       = new LifeSpan(isset($artist['life-span']) ? $artist['life-span'] : []);
        $this->aliases        = new AliasList(isset($artist['aliases']) ? $artist['aliases'] : []);
        $this->tags           = new TagList(isset($artist['tags']) ? $artist['tags'] : []);
    }

    /**
     * Returns the MusicBrainz Identifier (MBID).
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Returns the artist type.
     *
     * @return ArtistType
     */
    public function getType(): ArtistType
    {
        return $this->type;
    }

    /**
     * Returns the relevance score for the search result.
     *
     * @return Score
     */
    public function getScore(): Score
    {
        return $this->score;
    }

    /**
     * Returns the official name of the artist.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the sort index.
     *
     * @return string
     */
    public function getSortName(): string
    {
        return $this->sortName;
    }

    /**
     * Returns the artist's gender.
     *
     * @return Gender
     */
    public function getGender(): Gender
    {
        return $this->gender;
    }

    /**
     * Returns the artist's country.
     *
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * Returns the artist's area.
     *
     * @return Area
     */
    public function getArea(): Area
    {
        return $this->area;
    }

    /**
     * Returns the artist's begin area.
     *
     * @return Area
     */
    public function getBeginArea(): Area
    {
        return $this->beginArea;
    }

    /**
     * Returns the artist's end area.
     *
     * @return Area
     */
    public function getEndArea(): Area
    {
        return $this->endArea;
    }

    /**
     * Returns a disambiguation comment.
     *
     * @return string
     */
    public function getDisambiguation(): string
    {
        return $this->disambiguation;
    }

    /**
     * Returns a list of IPI codes.
     *
     * @return IPIList
     */
    public function getIpis(): IPIList
    {
        return $this->ipis;
    }

    /**
     * Returns the artist's life span.
     *
     * @return LifeSpan
     */
    public function getLifeSpan(): LifeSpan
    {
        return $this->lifeSpan;
    }

    /**
     * Returns a list of aliases.
     *
     * @return AliasList
     */
    public function getAliases(): AliasList
    {
        return $this->aliases;
    }

    /**
     * Returns a list of tags associated to the artist.
     *
     * @return TagList
     */
    public function getTags(): TagList
    {
        return $this->tags;
    }
}
