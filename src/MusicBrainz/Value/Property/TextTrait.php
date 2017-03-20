<?php

namespace MusicBrainz\Value\Property;

/**
 * Provides a getter for the text.
 */
trait TextTrait
{
    /**
     * A text
     *
     * @var string
     */
    private $text;

    /**
     * Returns a text.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
