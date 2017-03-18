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
    use Accessor\AliasNameAccessorTrait;
    use Accessor\AreaNameAccessorTrait;
    use Accessor\ArtistIdAccessorTrait;
    use Accessor\ArtistNameAccessorTrait;
    use Accessor\ArtistNameWithoutAccentAccessorTrait;
    use Accessor\BeginDateAccessorTrait;
    use Accessor\BeginAreaAccessorTrait;
    use Accessor\CommentAccessorTrait;
    use Accessor\CountryAccessorTrait;
    use Accessor\EndDateAccessorTrait;
    use Accessor\EndAreaAccessorTrait;
    use Accessor\EndedAccessorTrait;
    use Accessor\GenderAccessorTrait;
    use Accessor\IpiCodeAccessorTrait;
    use Accessor\SortNameAccessorTrait;
    use Accessor\TagAccessorTrait;

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
