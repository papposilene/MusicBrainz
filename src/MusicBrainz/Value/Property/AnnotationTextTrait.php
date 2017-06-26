<?php

namespace MusicBrainz\Value\Property;
use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\AnnotationText;

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

    /**
     * Sets the annotation text by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setAnnotationTextFromArray(array $input): void
    {
        $this->score = is_null($annotationText = ArrayAccess::getString($input, 'text'))
            ? new AnnotationText
            : new AnnotationText($annotationText);
    }
}
