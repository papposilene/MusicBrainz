<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\AliasList;

/**
 * Provides a getter for a list of aliases.
 */
trait AliasesTrait
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

    /**
     * Sets a list of aliases by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setAliasesFromArray(array $input): void
    {
        $this->aliases = is_null($aliases = ArrayAccess::getArray($input, 'aliases'))
            ? new AliasList
            : new AliasList($aliases);
    }
}
