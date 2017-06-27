<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Area;

/**
 * Provides a getter for the area.
 */
trait AreaTrait
{
    /**
     * An area
     * For artists: The area, as the name suggests, indicates the area with which an artist is primarily identified with.
     * It is often, but not always, its birth/formation country.
     *
     * @var Area
     */
    private $area;

    /**
     * Returns the area.
     *
     * @return Area
     */
    public function getArea(): Area
    {
        return $this->area;
    }

    /**
     * Sets the area by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setAreaFromArray(array $input): void
    {
        $this->area = is_null($area = ArrayAccess::getArray($input, 'area'))
            ? new Area
            : new Area($area);
    }
}
