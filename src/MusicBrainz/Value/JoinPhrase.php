<?php

namespace MusicBrainz\Value;

/**
 * A join phrase
 */
class JoinPhrase
{
    /**
     * The join phrase
     *
     * @var string
     */
    private $joinPhrase;

    /**
     * Constructs a join phrase.
     *
     * @param string $joinPhrase The joinPhrase
     */
    public function __construct(string $joinPhrase = '')
    {
        $this->joinPhrase = $joinPhrase;
    }

    /**
     * Returns the join phrase.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->joinPhrase;
    }
}
