<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the tag name.
 */
trait TagNameAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the tag name.
     *
     * @return null|string
     */
    public function getTagName(): ?string
    {
        return $this->getFilterValue('tag');
    }

    /**
     * Sets a tag applied to the artist.
     *
     * @param null|string $tagName A tag applied to the artist
     *
     * @return self
     */
    public function setTagName(?string $tagName): self
    {
        return $this->setFilterValue('tag', $tagName);
    }
}
