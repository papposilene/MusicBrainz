<?php

namespace MusicBrainz\Value;

/**
 * A collection name
 */
class CollectionName
{
    /**
     * The collection name
     *
     * @var string
     */
    private $name;

    /**
     * Constructs a collection name.
     *
     * @param string $name The name
     */
    public function __construct(string $name = '')
    {
        $this->name = $name;
    }

    /**
     * Returns the collection name as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }
}
