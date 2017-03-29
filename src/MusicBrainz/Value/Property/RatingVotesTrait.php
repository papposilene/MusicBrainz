<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\RatingVotes;

/**
 * Provides a getter for the number of rating votes.
 */
trait RatingVotesTrait
{
    /**
     * The number of rating votes
     *
     * @var RatingVotes
     */
    private $ratingVotes;

    /**
     * Returns the number of rating votes.
     *
     * @return RatingVotes
     */
    public function getRatingVotes(): RatingVotes
    {
        return $this->ratingVotes;
    }
}
