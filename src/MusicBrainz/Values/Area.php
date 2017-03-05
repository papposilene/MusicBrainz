<?php

namespace MusicBrainz;

/**
 * An area
 */
class Area
{
    /**
     * The MusikBrainz Identifier for the area
     *
     * @var string
     */
    private $id;

    /**
     * The area name
     *
     * @var string
     */
    private $name;

    /**
     * Sort index
     *
     * @var string
     */
    private $sortName;

    /**
     * Constructs an area.
     *
     * @param array $area Array of values
     */
    public function __construct(array $area)
    {
        $this->id       = isset($area['id']) ? (string) $area['id'] : '';
        $this->name     = isset($area['name']) ? (string) $area['name'] : '';
        $this->sortName = isset($area['sort-name']) ? (string) $area['sort-name'] : '';
    }

    /**
     * Returns the area name.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }
}
