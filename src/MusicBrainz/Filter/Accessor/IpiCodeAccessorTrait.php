<?php

namespace MusicBrainz\Filter\Accessor;

use MusicBrainz\Value\IPI;

/**
 * Provides accessors for the IPI (interested party information) code for the artist.
 */
trait IpiCodeAccessorTrait
{
    /**
     * The IPI (interested party information) code
     *
     * @var IPI
     */
    private $ipiCode;

    /**
     * Returns the IPI (interested party information) code.
     *
     * @return IPI
     */
    public function getIpiCode(): IPI
    {
        return $this->ipiCode;
    }

    /**
     * Sets the IPI (interested party information) code.
     *
     * @param IPI $ipiCode The IPI (interested party information) code
     *
     * @return self
     */
    public function setIpiCode(IPI $ipiCode): self
    {
        $this->ipiCode = $ipiCode;

        return $this;
    }
}
