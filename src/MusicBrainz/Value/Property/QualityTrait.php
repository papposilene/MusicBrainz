<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Quality;

/**
 * Provides a getter for the quality.
 */
trait QualityTrait
{
    /**
     * A quality
     *
     * @var Quality
     */
    private $quality;

    /**
     * Returns a quality.
     *
     * @return Quality
     */
    public function getQuality(): Quality
    {
        return $this->quality;
    }
}
