<?php
namespace MusicBrainz\Supplement\Field;

trait LabelRelationsTrait
{
    /**
     * True, if label relations should be included, otherwise false
     *
     * @var bool
     */
    private $labelRelations = false;

    /**
     * Returns true, if label relations should be included, otherwise false.
     *
     * @return bool
     */
    public function getIncludeFlagForLabelRelations(): bool
    {
        return $this->labelRelations;
    }

    /**
     * Sets whether label relations should be included.
     *
     * @param bool $labelRelations True, if label relations should be included, otherwise false
     *
     * @return self
     */
    public function includeLabelRelations(bool $labelRelations = true): self
    {
        $this->labelRelations = $labelRelations;

        return $this;
    }
}
