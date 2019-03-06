<?php

namespace MusicBrainz\Supplement\Field;

trait WorksTrait
{
    /**
     * True, if works should be included, otherwise false
     *
     * @var bool
     */
    private $works = false;

    /**
     * Returns true, if works should be included, otherwise false.
     *
     * @return bool
     */
    public function getIncludeFlagForWorks(): bool
    {
        return $this->works;
    }

    /**
     * Sets whether works should be included.
     *
     * @param bool $works True, if works should be included, otherwise false
     *
     * @return self
     */
    public function includeWorks(bool $works = true): self
    {
        $this->works = $works;

        return $this;
    }
}
