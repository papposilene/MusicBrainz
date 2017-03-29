<?php

namespace MusicBrainz\Value;

/**
 * A rating
 *
 * @link https://musicbrainz.org/doc/Rating_System
 */
class Rating
{
    use Property\RatingValueTrait;
    use Property\RatingVotesTrait;

    /**
     * Constructs a rating.
     *
     * @param array $rating Information about the rating
     */
    public function __construct(array $rating = [])
    {
        $this->ratingValue = new RatingValue(isset($rating['value']) ? (float) $rating['value'] : null);
        $this->ratingVotes = new RatingVotes(isset($rating['votes-count']) ? (int) $rating['votes-count'] : 0);
    }

    /**
     * Returns the rating as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getRatingValue();
    }
}
