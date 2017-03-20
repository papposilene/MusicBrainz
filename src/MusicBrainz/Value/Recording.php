<?php

namespace MusicBrainz\Value;

/**
 * A recording
 */
class Recording
{
    use Property\MBIDTrait;
    use Property\LengthTrait;
    use Property\TitleTrait;
    use Property\AliasesTrait;
    use Property\IpisTrait;
    use Property\CountryTrait;
    use Property\LabelCodeTrait;
    use Property\LabelTypeTrait;
    use Property\AreaTrait;
    use Property\LifeSpanTrait;
    use Property\SortNameTrait;
    use Property\IsnisTrait;
    use Property\DisambiguationTrait;
    use Property\ScoreTrait;

    /**
     * Constructs a recording.
     *
     * @param array $label Array of information about a label
     */
    public function __construct(array $label = [])
    {
        $this->MBID      = new MBID(isset($label['id']) ? (string) $label['id'] : '');
        $this->length    = new Length(isset($label['length']) ? (string) $label['length'] : '');
        $this->title     = new Title(isset($label['title']) ? (string) $label['title'] : '');
        $this->aliases   = new AliasList(isset($label['aliases']) ? $label['aliases'] : []);
        $this->ipis      = new IPIList(isset($label['ipis']) ? $label['ipis'] : []);
        $this->country   = new Country(isset($label['country']) ? (string) $label['country'] : '');
        $this->labelCode = new LabelCode(isset($label['label-code']) ? (string) $label['label-code'] : '');
        $this->labelType = new LabelType(isset($label['type']) ? (string) $label['type'] : '');
        $this->area      = new Area(isset($label['area']) ? $label['area'] : []);
        $this->lifeSpan  = new LifeSpan(isset($label['life-span']) ? $label['life-span'] : []);
        $this->sortName  = isset($label['sort-name']) ? (string)$label['sort-name'] : '';
        $this->score     = isset($label['score']) ? (int)$label['score'] : 0;
    }
}
