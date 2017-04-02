<?php

namespace MusicBrainz\Filter;

/**
 * A filter for searching labels
 */
class LabelFilter
{
    use Property\AliasNameTrait;
    use Property\BeginDateTrait;
    use Property\CommentTrait;
    use Property\CountryTrait;
    use Property\EndDateTrait;
    use Property\EndedTrait;
    use Property\IpiCodeTrait;
    use Property\LabelCodeTrait;
    use Property\LabelIdTrait;
    use Property\LabelNameTrait;
    use Property\LabelNameWithoutAccentTrait;
    use Property\LabelTypeTrait;
    use Property\SortNameTrait;
    use Property\TagTrait;
}
