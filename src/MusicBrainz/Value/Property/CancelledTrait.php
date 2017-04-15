<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Cancelled;

/**
 * Provides a getter for the "cancelled" flag.
 */
trait CancelledTrait
{
    /**
     * A "cancelled" flag
     *
     * @var Cancelled
     */
    private $cancelled;

    /**
     * Returns the "cancelled" flag
     *
     * @return bool
     */
    public function isCancelled(): bool
    {
        return $this->cancelled;
    }
}
