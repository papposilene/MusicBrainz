<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\RatingValue;

/**
 * Provides a getter for the rating value.
 */
trait RatingValueTrait
{
    /**
     * The rating value
     *
     * @var RatingValue
     */
    private $ratingValue;

    /**
     * Returns the rating value.
     *
     * @return RatingValue
     */
    public function getRatingValue(): RatingValue
    {
        return $this->ratingValue;
    }
}
