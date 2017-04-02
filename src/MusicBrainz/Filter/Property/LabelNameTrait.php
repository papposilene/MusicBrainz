<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the label name.
 */
trait LabelNameTrait
{
    /**
     * The label name
     *
     * @var null|Name
     */
    private $labelName;

    /**
     * Returns the label name.
     *
     * @return null|Name
     */
    public function getLabelName(): ?Name
    {
        return $this->labelName;
    }

    /**
     * Sets the label name.
     *
     * @param null|Name $labelName
     *
     * @return self
     */
    public function setLabelName(?Name $labelName): self
    {
        $this->labelName = $labelName;

        return $this;
    }
}
