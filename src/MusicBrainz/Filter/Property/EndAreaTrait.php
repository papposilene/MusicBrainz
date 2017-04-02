<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Area;

/**
 * Provides accessors for the name of the ending area.
 */
trait EndAreaTrait
{
    /**
     * The ending area
     *
     * @var null|Area
     */
    private $endArea;

    /**
     * Returns the ending area.
     *
     * @return null|Area
     */
    public function getEndArea(): ?Area
    {
        return $this->endArea;
    }

    /**
     * Sets the ending area.
     *
     * @param null|Area $endArea The ending area
     *
     * @return self
     */
    public function setEndArea(?Area $endArea): self
    {
        $this->endArea = $endArea;

        return $this;
    }
}
