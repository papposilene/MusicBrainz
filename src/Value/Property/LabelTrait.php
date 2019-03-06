<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\Label;

/**
 * Provides a getter for the label.
 */
trait LabelTrait
{
    /**
     * An label
     *
     * @var Label
     */
    private $label;

    /**
     * Returns the label.
     *
     * @return Label
     */
    public function getLabel(): Label
    {
        return $this->label;
    }

    /**
     * Sets the label by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setLabelFromArray(array $input): void
    {
        $this->label = is_null($label = ArrayAccess::getArray($input, 'label'))
            ? new Label
            : new Label($label);
    }
}
