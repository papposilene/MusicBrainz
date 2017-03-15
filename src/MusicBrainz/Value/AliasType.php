<?php

namespace MusicBrainz\Value;

/**
 * An alias type code
 *
 * @see https://musicbrainz.org/doc/Aliases
 */
class AliasType
{
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
    public function __construct(string $typeCode)
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
