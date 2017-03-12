<?php

namespace MusicBrainz\Filter\Accessor;

/**
 * Provides accessors for the 'ended' status.
 */
trait EndedAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns true for dissolved bands or dead artists.
     *
     * @return null|bool
     */
    public function getEnded(): ?bool
    {
        return $this->getFilterValue('ended');
    }

    /**
     * Sets, whether the is dissolved or the artist is dead.
     *
     * @param null|bool $ended True, if the band is dissolved or the artist is dead.
     *
     * @return self
     */
    public function setEnded(?bool $ended): self
    {
        return $this->setFilterValue('ended', $ended);
    }
}
