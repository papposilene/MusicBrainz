<?php

namespace MusicBrainz\Api\Lookup\Field;

trait TagsTrait
{
    /**
     * True, if tags should be included, otherwise false
     *
     * @var bool
     */
    private $tags = false;

    /**
     * Returns true, if tags should be included, otherwise false.
     *
     * @return bool
     */
    public function isTags(): bool
    {
        return $this->tags;
    }

    /**
     * Sets whether tags should be included.
     *
     * @param bool $tags True, if tags should be included, otherwise false
     *
     * @return self
     */
    public function setTags(bool $tags = true): self
    {
        $this->tags = $tags;

        return $this;
    }
}
