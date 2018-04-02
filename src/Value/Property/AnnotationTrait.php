<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Annotation;

/**
 * Provides a getter for a annotation.
 */
trait AnnotationTrait
{
    /**
     * The annotation
     *
     * @var Annotation
     */
    public $annotation;

    /**
     * Returns the annotation.
     *
     * @return Annotation
     */
    public function getAnnotation(): Annotation
    {
        return $this->annotation;
    }
}
