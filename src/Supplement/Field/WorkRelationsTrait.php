<?php
namespace MusicBrainz\Supplement\Field;

trait WorkRelationsTrait
{
    /**
     * True, if work relations should be included, otherwise false
     *
     * @var bool
     */
    private $workRelations = false;

    /**
     * Returns true, if work relations should be included, otherwise false.
     *
     * @return bool
     */
    public function getIncludeFlagForWorkRelations(): bool
    {
        return $this->workRelations;
    }

    /**
     * Sets whether work relations should be included.
     *
     * @param bool $workRelations True, if work relations should be included, otherwise false
     *
     * @return self
     */
    public function includeWorkRelations(bool $workRelations = true): self
    {
        $this->workRelations = $workRelations;

        return $this;
    }
}
