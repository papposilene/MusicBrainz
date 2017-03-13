<?php

namespace MusicBrainz\Value;

/**
 * An artist
 *
 * @see https://musicbrainz.org/doc/Artist
 */
class Artist
{
    use Accessor\GetMBIDTrait;
    use Accessor\GetArtistTypeTrait;
    use Accessor\GetScoreTrait;
    use Accessor\GetNameTrait;
    use Accessor\GetSortNameTrait;
    use Accessor\GetGenderTrait;
    use Accessor\GetCountryTrait;
    use Accessor\GetAreaTrait;
    use Accessor\GetBeginAreaTrait;
    use Accessor\GetEndAreaTrait;
    use Accessor\GetDisambiguationTrait;
    use Accessor\GetIpisTrait;
    use Accessor\GetLifeSpanTrait;
    use Accessor\GetAliasesTrait;
    use Accessor\GetTagsTrait;

    /**
     * Constructs an artist.
     *
     * @param array $artist Array of information about an artist
     */
    public function __construct(array $artist)
    {
        $this->MBID           = new MBID(isset($artist['id']) ? (string) $artist['id'] : '');
        $this->artistType     = new ArtistType(isset($artist['type']) ? (string) $artist['type'] : '');
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
}
