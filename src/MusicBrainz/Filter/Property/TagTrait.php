<?php

namespace MusicBrainz\Filter\Property;

/**
 * Provides accessors for the tag name.
 */
trait TagTrait
{
    /**
     * The tag name
     *
     * @var string
     */
    private $tagName;

    /**
     * Returns the tag name.
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tagName;
    }

    /**
     * Sets the tag name.
     *
     * @param string $tagName The tag name
     *
     * @return TagTrait
     */
    public function setTag(string $tagName): self
    {
        $this->tagName = $tagName;

        return $this;
    }
}
