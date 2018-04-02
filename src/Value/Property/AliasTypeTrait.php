<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\AliasType;

/**
 * Provides a getter for the alias type.
 */
trait AliasTypeTrait
{
    /**
     * An alias type
     *
     * @var AliasType
     */
    private $aliasType;

    /**
     * Returns the alias type.
     *
     * @return AliasType
     */
    public function getAliasType(): AliasType
    {
        return $this->aliasType;
    }

    /**
     * Sets the alias type by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setAliasTypeFromArray(array $input): void
    {
        $this->aliasType = is_null($aliasType = ArrayAccess::getString($input, 'type'))
            ? new AliasType
            : new AliasType($aliasType);
    }
}
