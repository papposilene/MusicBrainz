<?php

namespace MusicBrainz\Filter;

/**
 * A filter for searching labels
 */
class LabelFilter
{
    use Property\AliasNameTrait;
    use Property\BeginDateTrait;
    use Property\LabelCodeTrait;
    use Property\CommentTrait;
    use Property\CountryTrait;
    use Property\EndDateTrait;
    use Property\EndedTrait;
    use Property\IpiCodeTrait;
    use Property\LabelNameTrait;
    use Property\LabelNameWithoutAccentTrait;
    use Property\LabelIdTrait;
    use Property\SortNameTrait;
    use Property\TagTrait;
    use Property\LabelTypeTrait;
}
