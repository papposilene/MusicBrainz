<?php

namespace MusicBrainz\Value\Property;

/**
 * Provides a getter for the annotation text.
 */
trait AnnotationTextTrait
{
    /**
     * The annotation text
     *
     * @var string
     */
    private $annotationText;

    /**
     * Returns the annotation text.
     *
     * @return string
     */
    public function getAnnotationText(): string
    {
        return $this->annotationText;
    }
}
