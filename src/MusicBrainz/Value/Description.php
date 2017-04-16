<?php

namespace MusicBrainz\Value;

/**
 * A description
 */
class Description
{
    /**
     * The describing text
     *
     * @var string
     */
    private $text;

    /**
     * Constructs a description.
     *
     * @param string $text The describing text
     */
    public function __construct(string $text = '')
    {
        $this->text = $text;
    }

    /**
     * Returns the describing text as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->text;
    }
}
