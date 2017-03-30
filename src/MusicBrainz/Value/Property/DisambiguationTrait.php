<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Disambiguation;

/**
 * Provides a getter for the disambiguation comment.
 */
trait DisambiguationTrait
{
    /**
     * A disambiguation comment
     *
     * @var Disambiguation
     */
    private $disambiguation;

    /**
     * Returns a disambiguation comment.
     *
     * @return Disambiguation
     */
    public function getDisambiguation(): Disambiguation
    {
        return $this->disambiguation;
    }
}
