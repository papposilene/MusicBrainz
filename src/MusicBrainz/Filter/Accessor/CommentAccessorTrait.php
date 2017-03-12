<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the comment to differentiate similar artists.
 */
trait CommentAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the comment to differentiate similar artists.
     *
     * @return null|string
     */
    public function getComment(): ?string
    {
        return $this->getFilterValue('comment');
    }

    /**
     * Sets a comment to differentiate similar artists.
     *
     * @param null|string $comment A comment to differentiate similar artists
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        return $this->setFilterValue('comment', $comment);
    }
}
