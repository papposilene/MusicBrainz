<?php

namespace MusicBrainz\Value;

/**
 * An area
 */
class Area
{
    use Accessor\GetMBIDTrait;
    use Accessor\GetNameTrait;
    use Accessor\GetSortNameTrait;

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
