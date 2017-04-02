<?php

namespace MusicBrainz\Filter;

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
    use Property\ArtistTypeTrait;
}
