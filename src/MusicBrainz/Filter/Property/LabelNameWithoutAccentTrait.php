<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\Name;

/**
 * Provides accessors for the label name without accents.
 */
trait LabelNameWithoutAccentTrait
{
    /**
     * The label name without accent.
     *
     * @var Name
     */
    private $labelNameWithoutAccent;

    /**
     * Returns the label name without accent.
     *
     * @return Name
     */
    public function getLabelNameWithoutAccent(): Name
    {
        return $this->labelNameWithoutAccent;
    }

    /**
     * Sets the label name without accent.
     *
     * @param Name $labelNameWithoutAccent The label name without accent
     *
     * @return self
     */
    public function setLabelNameWithoutAccent(Name $labelNameWithoutAccent): self
    {
        $this->labelNameWithoutAccent = $labelNameWithoutAccent;

        return $this;
    }
}
