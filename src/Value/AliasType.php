<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * An alias type code
 *
 * @see https://musicbrainz.org/doc/Aliases
 *
 * @todo Define possible values!
 */
class AliasType implements Value
{
    /**
     * An alias for an area name.
     *
     * @var string
     */
    public const AREA_NAME = 'Area name';

    /**
     * The alias type code
     *
     * @var string
     */
    private $typeCode;

    /**
     * Constructs an alias type.
     *
     * @param string $typeCode An alias type code
     */
    public function __construct(string $typeCode = '')
    {
        $this->typeCode = $typeCode;
    }

    /**
     * Returns the alias type code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->typeCode;
    }
}
