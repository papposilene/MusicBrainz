<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\LabelType;

/**
 * Provides accessors for the label type.
 */
trait LabelTypeAccessorTrait
{
    /**
     * The label type
     *
     * @var LabelType
     */
    private $labelType;

    /**
     * Returns the label type
     *
     * @return LabelType
     */
    public function getLabelType(): LabelType
    {
        return $this->labelType;
    }

    /**
     * Sets the label type
     *
     * @param LabelType $labelType The label type
     *
     * @return self
     */
    public function setLabelType(LabelType $labelType): self
    {
        $this->labelType = $labelType;

        return $this;
    }
}
