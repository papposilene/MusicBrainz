<?php

namespace MusicBrainz\Value;

/**
 * A text
 */
class Text
{
    /**
     * The text
     *
     * @var string
     */
    private $text;

    /**
     * Constructs a text.
     *
     * @param string $text The text
     */
    public function __construct(string $text = '')
    {
        $this->text = $text;
    }

    /**
     * Returns the string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->text;
    }
}
