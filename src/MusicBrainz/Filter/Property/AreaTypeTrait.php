<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\AreaType;

/**
 * Provides accessors for the area type.
 */
trait AreaTypeTrait
{
    /**
     * The area type
     *
     * @var null|AreaType
     */
    private $areaType;

    /**
     * Returns the area type
     *
     * @return null|AreaType
     */
    public function getAreaType(): ?AreaType
    {
        return $this->areaType;
    }

    /**
     * Sets the area type
     *
     * @param null|AreaType $areaType The area type
     *
     * @return self
     */
    public function setAreaType(?AreaType $areaType): self
    {
        $this->areaType = $areaType;

        return $this;
    }
}
