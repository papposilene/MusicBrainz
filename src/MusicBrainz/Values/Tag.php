<?php

namespace MusicBrainz;

/**
 * A tag
 */
class Tag
{
    /**
     * Number of occurrences
     *
     * @var int
     */
    private $count;

    /**
     * The tag
     *
     * @var string
     */
    private $name;

    /**
     * Constructs a tag.
     *
     * @param array $tag Array of information about the tag
     */
    public function __construct(array $tag)
    {
        $this->count = isset($tag['count']) ? (int) $tag['count'] : 0;
        $this->name  = isset($tag['name']) ? (string) $tag['name'] : '';
    }

    /**
     * Returns the tag.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }
}
