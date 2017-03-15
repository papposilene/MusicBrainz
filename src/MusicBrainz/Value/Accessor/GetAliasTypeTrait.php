<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\AliasType;

/**
 * Provides a getter for the alias type.
 */
trait GetAliasTypeTrait
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
    public function getLabelType(): AliasType
    {
        return $this->aliasType;
    }
}
