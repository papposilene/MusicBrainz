<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\LabelType;

/**
 * Provides a getter for the label type.
 */
trait GetLabelTypeTrait
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
