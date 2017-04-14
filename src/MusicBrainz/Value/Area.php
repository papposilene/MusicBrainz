<?php

namespace MusicBrainz\Value;

/**
 * An area
 */
class Area
{
    use Property\AreaTypeTrait;
    use Property\DisambiguationTrait;
    use Property\ISO31661CodesTrait;
    use Property\ISO31662CodesTrait;
    use Property\LifeSpanTrait;
    use Property\MBIDTrait;
    use Property\NameTrait;
    use Property\SortNameTrait;

    /**
     * Constructs an area.
     *
     * @param array $area Array of values
     */
    public function __construct(array $area = [])
    {
        $this->areaType       = new AreaType(isset($area['type']) ? $area['type'] : '');
        $this->disambiguation = new Disambiguation(isset($area['disambiguation']) ? $area['disambiguation'] : '');
        $this->ISO31661Codes  = new ISO31662CodeList(isset($area['iso-3166-1-codes']) ? $area['iso-3166-1-codes'] : []);
        $this->ISO31662Codes  = new ISO31662CodeList(isset($area['iso-3166-2-codes']) ? $area['iso-3166-2-codes'] : []);
        $this->lifeSpan       = new LifeSpan(isset($area['life-span']) ? $area['life-span'] : []);
        $this->MBID           = new MBID(isset($area['id']) ? (string) $area['id'] : '');
        $this->name           = new Name(isset($area['name']) ? (string) $area['name'] : '');
        $this->sortName       = new SortName(isset($area['sort-name']) ? (string) $area['sort-name'] : '');
    }

    /**
     * Returns the area name.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->name;
    }
}
