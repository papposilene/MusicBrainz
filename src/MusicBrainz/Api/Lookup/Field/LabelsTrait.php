<?php

namespace MusicBrainz\Api\Lookup\Field;

trait LabelsTrait
{
    /**
     * True, if labels should be included, otherwise false
     *
     * @var bool
     */
    private $labels = false;

    /**
     * Returns true, if labels should be included, otherwise false.
     *
     * @return bool
     */
    public function isLabels(): bool
    {
        return $this->labels;
    }

    /**
     * Sets whether labels should be included.
     *
     * @param bool $labels True, if labels should be included, otherwise false
     *
     * @return self
     */
    public function setLabels(bool $labels = true): self
    {
        $this->labels = $labels;

        return $this;
    }
}
