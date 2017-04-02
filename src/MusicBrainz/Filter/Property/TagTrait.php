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
     * @var null|string
     */
    private $tagName;

    /**
     * Returns the tag name.
     *
     * @return null|string
     */
    public function getTag(): ?string
    {
        return $this->tagName;
    }

    /**
     * Sets the tag name.
     *
     * @param null|string $tagName The tag name
     *
     * @return self
     */
    public function setTag(?string $tagName): self
    {
        $this->tagName = $tagName;

        return $this;
    }
}
