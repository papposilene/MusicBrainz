<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the script by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setScriptFromArray(array $input): void
    {
        $this->script = is_null($script = ArrayAccess::getString($input, 'script'))
            ? new Script
            : new Script($script);
    }
}
