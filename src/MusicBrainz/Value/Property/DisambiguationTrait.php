<?php

namespace MusicBrainz\Value\Property;

/**
 * Provides a getter for the disambiguation comment.
 */
trait DisambiguationTrait
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
