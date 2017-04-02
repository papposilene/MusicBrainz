<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Area;

/**
 * Provides accessors for the name of the beginning area.
 */
trait BeginAreaTrait
{
    /**
     * The name of the beginning area.
     *
     * @var null|Area
     */
    private $beginArea;

    /**
     * Returns the beginning area.
     *
     * @return null|Area
     */
    public function getBeginArea(): ?Area
    {
        return $this->beginArea;
    }

    /**
     * Sets the beginning area.
     *
     * @param null|Area $beginArea The beginning area
     *
     * @return self
     */
    public function setBeginArea(?Area $beginArea): self
    {
        $this->beginArea = $beginArea;

        return $this;
    }
}
