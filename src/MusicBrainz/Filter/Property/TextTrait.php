<?php

namespace MusicBrainz\Filter\Property;

/**
 * Provides accessors for the text.
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
     * Returns the text.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Sets the text.
     *
     * @param string $text The text
     *
     * @return TextTrait
     */
    public function setText(string $text = ''): self
    {
        $this->text = $text;

        return $this;
    }
}
