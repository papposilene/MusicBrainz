<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\DataQuality;

/**
 * Provides a getter for the data quality.
 */
trait DataQualityTrait
{
    /**
     * The data quality
     *
     * @var DataQuality
     */
    private $quality;

    /**
     * Returns the data quality.
     *
     * @return DataQuality
     */
    public function getQuality(): DataQuality
    {
        return $this->quality;
    }
}
