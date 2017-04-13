<?php

namespace MusicBrainz\Value;

/**
 * A language
 */
class Language
{
    /**
     * The language code
     *
     * @var string
     */
    private $languageCode;

    /**
     * Constructs a language.
     *
     * @param string $languageCode The language code
     */
    public function __construct(string $languageCode = '')
    {
        $this->languageCode = $languageCode;
    }

    /**
     * Returns the language code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->languageCode;
    }
}
