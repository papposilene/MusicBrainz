<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\TextRepresentation;

/**
 * Provides a getter for the text representation.
 */
trait TextRepresentationTrait
{
    /**
     * A text representation
     *
     * @var TextRepresentation
     */
    private $textRepresentation;

    /**
     * Returns the text representation.
     *
     * @return TextRepresentation
     */
    public function getText(): TextRepresentation
    {
        return $this->textRepresentation;
    }

    /**
     * Sets the text representation by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setTextRepresentationFromArray(array $input): void
    {
        $this->textRepresentation = is_null($textRepresentation = ArrayAccess::getArray($input, 'text-representation'))
            ? new TextRepresentation
            : new TextRepresentation($textRepresentation);
    }
}
