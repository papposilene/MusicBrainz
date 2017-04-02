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
    use Property\ArtistTypeTrait;
    use Property\BeginAreaTrait;
    use Property\BeginDateTrait;
    use Property\CommentTrait;
    use Property\CountryTrait;
    use Property\EndAreaTrait;
    use Property\EndDateTrait;
    use Property\EndedTrait;
    use Property\GenderTrait;
    use Property\IpiCodeTrait;
    use Property\SortNameTrait;
    use Property\TagTrait;
}
