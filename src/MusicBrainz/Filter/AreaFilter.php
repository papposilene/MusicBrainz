<?php

namespace MusicBrainz\Filter;

/**
 * A filter for searching areas
 */
class AreaFilter
{
    use Property\AliasNameTrait;
    use Property\AreaIdTrait;
    use Property\AreaNameTrait;
    use Property\AreaTypeTrait;
    use Property\BeginDateTrait;
    use Property\CommentTrait;
    use Property\EndDateTrait;
    use Property\EndedTrait;
    use Property\ISO3166CodeTrait;
    use Property\ISO31661CodeTrait;
    use Property\ISO31662CodeTrait;
    use Property\ISO31663CodeTrait;
    use Property\SortNameTrait;
}
