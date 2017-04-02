<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\IPI;

/**
 * Provides accessors for the IPI (interested party information) code for the artist.
 */
trait IpiCodeTrait
{
    /**
     * The IPI (interested party information) code
     *
     * @var null|IPI
     */
    private $ipiCode;

    /**
     * Returns the IPI (interested party information) code.
     *
     * @return null|IPI
     */
    public function getIpiCode(): ?IPI
    {
        return $this->ipiCode;
    }

    /**
     * Sets the IPI (interested party information) code.
     *
     * @param null|IPI $ipiCode The IPI (interested party information) code
     *
     * @return self
     */
    public function setIpiCode(?IPI $ipiCode): self
    {
        $this->ipiCode = $ipiCode;

        return $this;
    }
}
