<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\LabelType;

/**
 * Provides a getter for the label type.
 */
trait LabelTypeTrait
{
    /**
     * The type describes the main activity of the label.
     *
     * @var LabelType
     */
    private $labelType;

    /**
     * Returns the label type.
     *
     * @return LabelType
     */
    public function getLabelType(): LabelType
    {
        return $this->labelType;
    }
}
