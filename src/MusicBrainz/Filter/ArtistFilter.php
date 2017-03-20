<?php

namespace MusicBrainz\Filter;

use MusicBrainz\Value\Area;
use MusicBrainz\Value\Country;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\Gender;
use MusicBrainz\Value\IPI;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A filter for searching artists
 */
class ArtistFilter
{
    use Property\AliasNameTrait;
    use Property\AreaNameTrait;
    use Property\ArtistIdTrait;
    use Property\ArtistNameTrait;
    use Property\ArtistNameWithoutAccentTrait;
    use Property\BeginDateTrait;
    use Property\BeginAreaTrait;
    use Property\CommentTrait;
    use Property\CountryTrait;
    use Property\EndDateTrait;
    use Property\EndAreaTrait;
    use Property\EndedTrait;
    use Property\GenderTrait;
    use Property\IpiCodeTrait;
    use Property\SortNameTrait;
    use Property\TagTrait;

    /**
     * Constructs an artist filter.
     */
    public function __construct()
    {
        $this->aliasName               = new Name;
        $this->areaName                = new Name;
        $this->artistId                = new MBID;
        $this->artistName              = new Name;
        $this->artistNameWithoutAccent = new Name;
        $this->beginDate               = new Date;
        $this->beginArea               = new Area;
        $this->comment                 = '';
        $this->country                 = new Country;
        $this->endDate                 = new Date;
        $this->endArea                 = new Area;
        $this->ended                   = null;
        $this->gender                  = new Gender;
        $this->ipiCode                 = new IPI;
        $this->sortName                = new Name;
        $this->tagName                 = '';
    }
}
