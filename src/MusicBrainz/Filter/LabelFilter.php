<?php

namespace MusicBrainz\Filter;

use MusicBrainz\Value\Country;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\IPI;
use MusicBrainz\Value\LabelCode;
use MusicBrainz\Value\LabelType;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * A filter for searching labels
 */
class LabelFilter
{
    use Accessor\AliasNameAccessorTrait;
    use Accessor\BeginDateAccessorTrait;
    use Accessor\LabelCodeAccessorTrait;
    use Accessor\CommentAccessorTrait;
    use Accessor\CountryAccessorTrait;
    use Accessor\EndDateAccessorTrait;
    use Accessor\EndedAccessorTrait;
    use Accessor\IpiCodeAccessorTrait;
    use Accessor\LabelNameAccessorTrait;
    use Accessor\LabelNameWithoutAccentAccessorTrait;
    use Accessor\LabelIdAccessorTrait;
    use Accessor\SortNameAccessorTrait;
    use Accessor\TagAccessorTrait;
    use Accessor\LabelTypeAccessorTrait;

    /**
     * Constructs a label filter.
     */
    public function __construct()
    {
        $this->aliasName              = new Name;
        $this->beginDate              = new Date;
        $this->labelCode              = new LabelCode;
        $this->comment                = '';
        $this->country                = new Country;
        $this->endDate                = new Date;
        $this->ended                  = null;
        $this->ipiCode                = new IPI;
        $this->labelName              = new Name;
        $this->labelNameWithoutAccent = new Name;
        $this->labelId                = new MBID;
        $this->sortName               = new Name;
        $this->tagName                = '';
        $this->labelType              = new LabelType;
    }
}
