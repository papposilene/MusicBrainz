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
     * @var string
     */
    private $comment;

    /**
     * Returns the comment.
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * Sets the comment.
     *
     * @param string $comment The comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
