<?php

namespace MusicBrainz\Filter\Property;

/**
 * Provides accessors for the comment to differentiate similar artists.
 */
trait CommentTrait
{
    /**
     * A comment
     *
     * @var null|string
     */
    private $comment;

    /**
     * Returns the comment.
     *
     * @return null|string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * Sets the comment.
     *
     * @param null|string $comment The comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
