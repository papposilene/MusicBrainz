<?php

namespace MusicBrainz\Api\Lookup\Field;

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
    public function isWorks(): bool
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
    public function setWorks(bool $works = true): self
    {
        $this->works = $works;

        return $this;
    }
}
