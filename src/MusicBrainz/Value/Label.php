<?php

namespace MusicBrainz\Value;

/**
 * A label
 */
class Label
{
    use Property\AliasesTrait;
    use Property\AreaTrait;
    use Property\CountryTrait;
    use Property\DisambiguationTrait;
    use Property\IpisTrait;
    use Property\IsnisTrait;
    use Property\LabelCodeTrait;
    use Property\LabelTypeTrait;
    use Property\LifeSpanTrait;
    use Property\MBIDTrait;
    use Property\NameTrait;
    use Property\ScoreTrait;
    use Property\SortNameTrait;

    /**
     * Constructs a label.
     *
     * @param array $label Array of information about a label
     */
    public function __construct(array $label = [])
    {
        $this->aliases        = new AliasList(isset($label['aliases']) ? $label['aliases'] : []);
        $this->area           = new Area(isset($label['area']) ? $label['area'] : []);
        $this->country        = new Country(isset($label['country']) ? (string) $label['country'] : '');
        $this->disambiguation = new Disambiguation(isset($label['disambiguation']) ? (string)$label['disambiguation'] : '');
        $this->ipis           = new IPIList(isset($label['ipis']) ? $label['ipis'] : []);
        $this->isnis          = new ISNIList(isset($label['isnis']) ? $label['isnis'] : []);
        $this->labelCode      = new LabelCode(isset($label['label-code']) ? (string) $label['label-code'] : '');
        $this->labelType      = new LabelType(isset($label['type']) ? (string) $label['type'] : '');
        $this->lifeSpan       = new LifeSpan(isset($label['life-span']) ? $label['life-span'] : []);
        $this->MBID           = new MBID(isset($label['id']) ? (string) $label['id'] : '');
        $this->name           = new Name(isset($label['name']) ? (string) $label['name'] : '');
        $this->score          = isset($label['score']) ? (int)$label['score'] : 0;
        $this->sortName       = new SortName(isset($label['sort-name']) ? (string)$label['sort-name'] : '');
    }
}
