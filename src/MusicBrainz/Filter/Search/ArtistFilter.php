<?php

namespace MusicBrainz\Filter\Search;

/**
 * A filter for searching artists
 */
class ArtistFilter
{
    use \MusicBrainz\Filter\Property\AliasNameTrait;
    use \MusicBrainz\Filter\Property\AreaNameTrait;
    use \MusicBrainz\Filter\Property\ArtistIdTrait;
    use \MusicBrainz\Filter\Property\ArtistNameTrait;
    use \MusicBrainz\Filter\Property\ArtistNameWithoutAccentTrait;
    use \MusicBrainz\Filter\Property\ArtistTypeTrait;
    use \MusicBrainz\Filter\Property\BeginAreaTrait;
    use \MusicBrainz\Filter\Property\BeginDateTrait;
    use \MusicBrainz\Filter\Property\CommentTrait;
    use \MusicBrainz\Filter\Property\CountryTrait;
    use \MusicBrainz\Filter\Property\EndAreaTrait;
    use \MusicBrainz\Filter\Property\EndDateTrait;
    use \MusicBrainz\Filter\Property\EndedTrait;
    use \MusicBrainz\Filter\Property\GenderTrait;
    use \MusicBrainz\Filter\Property\IpiCodeTrait;
    use \MusicBrainz\Filter\Property\SortNameTrait;
    use \MusicBrainz\Filter\Property\TagTrait;
}
