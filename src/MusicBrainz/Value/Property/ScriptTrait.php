<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Script;

/**
 * Provides a getter for a script.
 */
trait ScriptTrait
{
    /**
     * The script
     *
     * @var Script
     */
    public $script;

    /**
     * Returns the script.
     *
     * @return Script
     */
    public function getScript(): Script
    {
        return $this->script;
    }

}
