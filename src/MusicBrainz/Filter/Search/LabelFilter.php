<?php

namespace MusicBrainz\Filter\Search;

/**
 * A filter for searching labels
 */
class LabelFilter
{
    use \MusicBrainz\Filter\Property\AliasNameTrait;
    use \MusicBrainz\Filter\Property\BeginDateTrait;
    use \MusicBrainz\Filter\Property\CommentTrait;
    use \MusicBrainz\Filter\Property\CountryTrait;
    use \MusicBrainz\Filter\Property\EndDateTrait;
    use \MusicBrainz\Filter\Property\EndedTrait;
    use \MusicBrainz\Filter\Property\IpiCodeTrait;
    use \MusicBrainz\Filter\Property\LabelCodeTrait;
    use \MusicBrainz\Filter\Property\LabelIdTrait;
    use \MusicBrainz\Filter\Property\LabelNameTrait;
    use \MusicBrainz\Filter\Property\LabelNameWithoutAccentTrait;
    use \MusicBrainz\Filter\Property\LabelTypeTrait;
    use \MusicBrainz\Filter\Property\SortNameTrait;
    use \MusicBrainz\Filter\Property\TagTrait;
}
