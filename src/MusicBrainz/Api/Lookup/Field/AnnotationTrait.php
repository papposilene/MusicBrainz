<?php

namespace MusicBrainz\Api\Lookup\Field;

trait AnnotationTrait
{
    /**
     * True, if annotation should be included, otherwise false
     *
     * @var bool
     */
    private $annotation = false;

    /**
     * Returns true, if annotation should be included, otherwise false.
     *
     * @return bool
     */
    public function isAnnotation(): bool
    {
        return $this->annotation;
    }

    /**
     * Sets whether annotation should be included.
     *
     * @param bool $annotation True, if annotation should be included, otherwise false
     *
     * @return self
     */
    public function setAnnotation(bool $annotation = true): self
    {
        $this->annotation = $annotation;

        return $this;
    }
}
