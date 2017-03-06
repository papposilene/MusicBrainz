<?php

namespace MusicBrainz\Value;

/**
 * A relevance score for search results
 */
class Score
{
    /**
     * The relevance score
     *
     * @var string
     */
    private $score;

    /**
     * Constructs a relevance score.
     *
     * @param int $score The score
     */
    public function __construct(int $score)
    {
        if (0 <= $score && $score <= 100) {
            $this->score = $score;

            return;
        }

        if ($score < 0) {
            $this->score = 0;
        }

        if ($score > 100) {
            $this->score = 100;
        }
    }

    /**
     * Returns the relevance score as integer.
     *
     * @return int
     */
    public function toInteger(): int
    {
        return $this->score;
    }
}
