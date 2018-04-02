<?php
namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A count
 */
class Count implements Value
{
    /**
     * The ID
     *
     * @var string
     */
    private $count;

    /**
     * Constructs a count.
     *
     * @param int $count A count
     */
    public function __construct(int $count = 0)
    {
        $this->count = ($count >= 0) ? $count : 0;
    }

    /**
     * Returns the count as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->count;
    }
}
