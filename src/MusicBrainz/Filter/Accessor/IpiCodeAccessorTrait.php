<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\IPI;

/**
 * Provides accessors for the IPI (interested party information) code for the artist.
 */
trait IpiCodeAccessorTrait
{
    use AccessorTrait;

    /**
     * Returns the IPI (interested party information) code for the artist.
     *
     * @return null|IPI
     */
    public function getIpiCode(): ?IPI
    {
        return $this->getFilterValue('ipi');
    }

    /**
     * Sets the IPI (interested party information) code for the artist.
     *
     * @param IPI|null $ipiCode The IPI (interested party information) code for the artist
     *
     * @return self
     */
    public function setIpiCode(?IPI $ipiCode): self
    {
        return $this->setFilterValue('ipi', $ipiCode);
    }
}
