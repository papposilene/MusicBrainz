<?php

namespace MusicBrainz\Value\Property;

/**
 * Provides a getter for the text representation.
 */
trait TextRepresentationTrait
{
    /**
     * A text representation
     *
     * @var string
     */
    private $textRepresentation;

    /**
     * Returns the text representation.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->textRepresentation;
    }
}
