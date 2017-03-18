<?php

namespace MusicBrainz\Value\Accessor;

/**
 * Provides a getter for the text.
 */
trait GetTextTrait
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
