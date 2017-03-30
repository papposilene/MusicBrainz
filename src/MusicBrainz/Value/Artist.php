<?php

namespace MusicBrainz\Value;

/**
 * An artist
 *
 * @see https://musicbrainz.org/doc/Artist
 */
class Artist
{
    use Property\MBIDTrait;
    use Property\ArtistTypeTrait;
    use Property\ScoreTrait;
    use Property\NameTrait;
    use Property\SortNameTrait;
    use Property\GenderTrait;
    use Property\CountryTrait;
    use Property\AreaTrait;
    use Property\BeginAreaTrait;
    use Property\EndAreaTrait;
    use Property\DisambiguationTrait;
    use Property\IpisTrait;
    use Property\LifeSpanTrait;
    use Property\AliasesTrait;
    use Property\TagsTrait;

    /**
     * Constructs an artist.
     *
     * @param array $artist Array of information about an artist
     */
    public function __construct(array $artist = [])
    {
        $this->MBID           = new MBID(isset($artist['id']) ? (string) $artist['id'] : '');
        $this->artistType     = new ArtistType(isset($artist['type']) ? (string) $artist['type'] : '');
        $this->score          = new Score(isset($artist['score']) ? (int) $artist['score'] : 0);
        $this->name           = new Name(isset($artist['name']) ? (string) $artist['name'] : '');
        $this->sortName       = isset($artist['sort-name']) ? (string) $artist['sort-name'] : '';
        $this->gender         = new Gender(isset($artist['gender']) ? (string) $artist['gender'] : Gender::UNDEFINED);
        $this->country        = new Country(isset($artist['country']) ? (string) $artist['country'] : '');
        $this->area           = new Area(isset($artist['area']) ? $artist['area'] : []);
        $this->beginArea      = new Area(isset($artist['begin-area']) ? $artist['begin-area'] : []);
        $this->endArea        = new Area(isset($artist['end-area']) ? $artist['end-area'] : []);
        $this->disambiguation = new Disambiguation(isset($artist['disambiguation']) ? (string) $artist['disambiguation'] : '');
        $this->ipis           = new IPIList(isset($artist['ipis']) ? $artist['ipis'] : []);
        $this->lifeSpan       = new LifeSpan(isset($artist['life-span']) ? $artist['life-span'] : []);
        $this->aliases        = new AliasList(isset($artist['aliases']) ? $artist['aliases'] : []);
        $this->tags           = new TagList(isset($artist['tags']) ? $artist['tags'] : []);
    }
}
