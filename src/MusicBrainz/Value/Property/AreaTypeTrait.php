<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\AreaType;

/**
 * Provides a getter for the area type.
 */
trait AreaTypeTrait
{
    /**
     * An area type
     *
     * @var AreaType
     */
    private $areaType;

    /**
     * Returns the area type.
     *
     * @return AreaType
     */
    public function getAreaType(): AreaType
    {
        return $this->areaType;
    }
}
