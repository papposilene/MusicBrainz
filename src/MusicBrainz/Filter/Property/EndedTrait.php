<?php

namespace MusicBrainz\Filter\Property;

/**
 * Provides accessors for the 'ended' status.
 */
trait EndedTrait
{
    /**
     * True, if already ended, otherwise false
     *
     * @var null|bool
     */
    private $ended;

    /**
     * Returns the 'ended' status.
     *
     * @return null|bool
     */
    public function isEnded(): ?bool
    {
        return $this->ended;
    }

    /**
     * Sests the 'ended' status.
     *
     * @param null|bool $ended
     *
     * @return self
     */
    public function setEnded(?bool $ended): self
    {
        $this->ended = $ended;

        return $this;
    }
}
