<?php
namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A relevance score for search results
 */
class Score implements Value
{
    /**
     * The relevance score
     *
     * @var null|int
     */
    private $score;

    /**
     * Constructs a relevance score.
     *
     * @param null|int $score The score
     */
    public function __construct(int $score = null)
    {
        $this->score = ((0 <= $score && $score <= 100) || null === $score)
            ? $score
            : null;
    }

    /**
     * Returns the relevance score as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (null === $this->score)
            ? ''
            : $this->score;
    }
}
