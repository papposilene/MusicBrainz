<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A relevance score for search results
 */
class Score implements Value
{
    /**
     * The number
     *
     * @var null|int
     */
    private $number;

    /**
     * Constructs a relevance score.
     *
     * @param null|int $number The number
     */
    public function __construct(int $number = null)
    {
        $this->number = ((0 <= $number && $number <= 100) || null === $number)
            ? $number
            : null;
    }

    /**
     * Returns the relevance score as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (null === $this->number)
            ? ''
            : $this->number;
    }

    /**
     * Returns the number.
     *
     * @return null|int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }
}
