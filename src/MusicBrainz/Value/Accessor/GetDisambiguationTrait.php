<?php

namespace MusicBrainz\Value\Accessor;

/**
 * Provides a getter for the disambiguation comment.
 */
trait GetDisambiguationTrait
{
    /**
     * A disambiguation comment
     *
     * @var string
     *
     * @see https://musicbrainz.org/doc/Disambiguation_Comment
     */
    private $disambiguation;

    /**
     * Returns a disambiguation comment.
     *
     * @return string
     */
    public function getDisambiguation(): string
    {
        return $this->disambiguation;
    }
}
