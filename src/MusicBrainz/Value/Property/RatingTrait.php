<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Rating;

/**
 * Provides a getter for a rating.
 */
trait RatingTrait
{
    /**
     * The rating
     *
     * @var Rating
     */
    private $rating;

    /**
     * Returns the rating.
     *
     * @return Rating
     */
    public function getRating(): Rating
    {
        return $this->rating;
    }
}
