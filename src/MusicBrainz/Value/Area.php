<?php

namespace MusicBrainz\Value;

/**
 * An area
 */
class Area
{
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
        $this->MBID     = new MBID(isset($area['id']) ? (string) $area['id'] : '');
        $this->name     = new Name(isset($area['name']) ? (string) $area['name'] : '');
        $this->sortName = isset($area['sort-name']) ? (string) $area['sort-name'] : '';
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
