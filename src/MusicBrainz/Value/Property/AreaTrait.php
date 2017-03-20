<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Area;

/**
 * Provides a getter for the area.
 */
trait AreaTrait
{
    /**
     * The artist area, as the name suggests, indicates the area with which an artist is primarily identified with. It
     * is often, but not always, its birth/formation country.
     *
     * @var Area
     */
    private $area;

    /**
     * Returns the artist's area.
     *
     * @return Area
     */
    public function getArea(): Area
    {
        return $this->area;
    }
}
