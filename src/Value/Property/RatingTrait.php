<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the rating by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setRatingFromArray(array $input): void
    {
        $this->rating = is_null($rating = ArrayAccess::getArray($input, 'rating'))
            ? new Rating
            : new Rating($rating);
    }
}
