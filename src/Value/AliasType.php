<?php

namespace MusicBrainz\Value;

/**
 * An alias type code
 *
 * @see https://musicbrainz.org/doc/Aliases
 *
 * @todo Define possible values!
 */
class AliasType extends AbstractType
{
    /**
     * An alias for an area name.
     *
     * @var string
     */
    public const AREA_NAME = 'Area name';

    /**
     * Constructs an alias type.
     *
     * @param string $typeCode An alias type code
     */
    public function __construct(?string $typeCode = parent::UNDEFINED, MBID $mbid = null)
    {
        parent::__construct($typeCode, $mbid);
    }
}
