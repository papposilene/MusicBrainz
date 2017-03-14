<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\LabelCode;

/**
 * Provides a getter for the label code.
 */
trait GetLabelCodeTrait
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
