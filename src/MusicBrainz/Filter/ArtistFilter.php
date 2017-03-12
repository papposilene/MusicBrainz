<?php

namespace MusicBrainz\Filter;

/**
 * A filter for searching artists
 */
class ArtistFilter extends Filter
{
    use Accessor\AliasNameAccessorTrait;
    use Accessor\AreaNameAccessorTrait;
    use Accessor\ArtistIdAccessorTrait;
    use Accessor\ArtistNameAccessorTrait;
    use Accessor\ArtistNameWithoutAccentAccessorTrait;
    use Accessor\BeginAccessorTrait;
    use Accessor\BeginAreaAccessorTrait;
    use Accessor\CommentAccessorTrait;
    use Accessor\CountryAccessorTrait;
    use Accessor\EndAccessorTrait;
    use Accessor\EndAreaAccessorTrait;
    use Accessor\EndedAccessorTrait;
    use Accessor\GenderAccessorTrait;
    use Accessor\IpiCodeAccessorTrait;
    use Accessor\SortNameAccessorTrait;
    use Accessor\TagNameAccessorTrait;
}
