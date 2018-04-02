<?php
namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A releases format
 *
 * @see https://musicbrainz.org/doc/Release/Format
 */
class Format implements Value
{
    /**
     * The code of the format
     *
     * @var string
     */
    private $code;

    /**
     * Constructs a format.
     *
     * @param string $format A format
     */
    public function __construct(string $format = '')
    {
        $this->code = $format;
    }

    /**
     * Returns the code of the format.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->code;
    }
}
