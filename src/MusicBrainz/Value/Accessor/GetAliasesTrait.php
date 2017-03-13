<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\AliasList;

/**
 * Provides a getter for a list of aliases.
 */
trait GetAliasesTrait
{
    /**
     * A list of aliases
     *
     * @var AliasList
     */
    private $aliases;

    /**
     * Returns a list of aliases.
     *
     * @return AliasList
     */
    public function getAliases(): AliasList
    {
        return $this->aliases;
    }
}
