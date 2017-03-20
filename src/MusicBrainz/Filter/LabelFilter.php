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
