<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\LabelCode;

/**
 * Provides a getter for the label code.
 */
trait LabelCodeTrait
{
    /**
     * The label code
     *
     * @var LabelCode
     */
    private $labelCode;

    /**
     * Returns the label code.
     *
     * @return LabelCode
     */
    public function getGender(): LabelCode
    {
        return $this->labelCode;
    }
}
