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
     * @var null|string
     */
    private $text;

    /**
     * Returns the text.
     *
     * @return null|string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Sets the text.
     *
     * @param null|string $text The text
     *
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
