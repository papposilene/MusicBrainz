<?php

namespace MusicBrainz\Supplement\Field;

trait RecordingsTrait
{
    /**
     * True, if recordings should be included, otherwise false
     *
     * @var bool
     */
    private $recordings = false;

    /**
     * Returns true, if recordings should be included, otherwise false.
     *
     * @return bool
     */
    public function getIncludeFlagForRecordings(): bool
    {
        return $this->recordings;
    }

    /**
     * Sets whether recordings should be included.
     *
     * @param bool $recordings True, if recordings should be included, otherwise false
     *
     * @return self
     */
    public function includeRecordings(bool $recordings = true): self
    {
        $this->recordings = $recordings;

        return $this;
    }
}
