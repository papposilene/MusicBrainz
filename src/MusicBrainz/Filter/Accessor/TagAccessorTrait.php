<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the tag name.
 */
trait TagAccessorTrait
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
     * @return self
     */
    public function setTag(string $tagName): self
    {
        $this->tagName = $tagName;

        return $this;
    }
}
