<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Area;

/**
 * Provides accessors for the name of the ending area.
 */
trait EndAreaAccessorTrait
{
    /**
     * The ending area
     *
     * @var Area
     */
    private $endArea;

    /**
     * Returns the ending area.
     *
     * @return Area
     */
    public function getEndArea(): Area
    {
        return $this->endArea;
    }

    /**
     * Sets the ending area.
     *
     * @param Area $endArea The ending area
     *
     * @return self
     */
    public function setEndArea(Area $endArea): self
    {
        $this->endArea = $endArea;

        return $this;
    }
}
