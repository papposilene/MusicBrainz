<?php

namespace MusicBrainz\Filter;

use MusicBrainz\Filter\Accessor\AliasNameAccessorTrait;
use MusicBrainz\Filter\Accessor\AreaNameAccessorTrait;
use MusicBrainz\Filter\Accessor\ArtistIdAccessorTrait;
use MusicBrainz\Filter\Accessor\ArtistNameAccessorTrait;
use MusicBrainz\Filter\Accessor\ArtistNameWithoutAccentAccessorTrait;
use MusicBrainz\Filter\Accessor\BeginAccessorTrait;
use MusicBrainz\Filter\Accessor\BeginAreaAccessorTrait;
use MusicBrainz\Filter\Accessor\CommentAccessorTrait;
use MusicBrainz\Filter\Accessor\CountryAccessorTrait;
use MusicBrainz\Filter\Accessor\EndAccessorTrait;
use MusicBrainz\Filter\Accessor\EndAreaAccessorTrait;
use MusicBrainz\Filter\Accessor\EndedAccessorTrait;
use MusicBrainz\Filter\Accessor\GenderAccessorTrait;
use MusicBrainz\Filter\Accessor\IpiCodeAccessorTrait;
use MusicBrainz\Filter\Accessor\SortNameAccessorTrait;
use MusicBrainz\Filter\Accessor\TagNameAccessorTrait;
use MusicBrainz\Value\ArtistType;

/**
 * A filter for searching artists
 */
class ArtistFilter extends Filter
{
    use AliasNameAccessorTrait;
    use AreaNameAccessorTrait;
    use ArtistIdAccessorTrait;
    use ArtistNameAccessorTrait;
    use ArtistNameWithoutAccentAccessorTrait;
    use BeginAccessorTrait;
    use BeginAreaAccessorTrait;
    use CommentAccessorTrait;
    use CountryAccessorTrait;
    use EndAccessorTrait;
    use EndAreaAccessorTrait;
    use EndedAccessorTrait;
    use GenderAccessorTrait;
    use IpiCodeAccessorTrait;
    use SortNameAccessorTrait;
    use TagNameAccessorTrait;
}
