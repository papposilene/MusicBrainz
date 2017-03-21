<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for an area name.
 */
trait AreaNameTrait
{
    /**
     * The area name.
     *
     * @var Name
     */
    private $areaName;

    /**
     * Returns the area name.
     *
     * @return Name
     */
    public function getAreaName(): Name
    {
        return $this->areaName;
    }

    /**
     * Sets the area name.
     *
     * @param Name $areaName The area name
     *
     * @return self
     */
    public function setAreaName(Name $areaName): self
    {
        $this->areaName = $areaName;

        return $this;
    }
}