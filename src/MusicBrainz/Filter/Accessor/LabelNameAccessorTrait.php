<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the label name.
 */
trait LabelNameAccessorTrait
{
    /**
     * The label name
     *
     * @var Name
     */
    private $labelName;

    /**
     * Returns the label name.
     *
     * @return Name
     */
    public function getLabelName(): Name
    {
        return $this->labelName;
    }

    /**
     * Sets the label name.
     *
     * @param Name $labelName
     *
     * @return self
     */
    public function setLabelName(Name $labelName): self
    {
        $this->labelName = $labelName;

        return $this;
    }
}
