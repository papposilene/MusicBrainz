<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * A text representation
 */
class TextRepresentation implements Value
{
    use Property\LanguageTrait;
    use Property\ScriptTrait;

    /**
     * Constructs a text representation.
     *
     * @param array $textRepresentation Array of information about a text representation
     */
    public function __construct(array $textRepresentation = [])
    {
        $this->language = isset($textRepresentation['language']) ? new Language($textRepresentation['language']) : new Language;
        $this->script   = isset($textRepresentation['script'])   ? new Script($textRepresentation['script'])     : new Script;
    }

    /**
     * Returns the text representation as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        if (empty((string) $this->getScript())) {
            $textRepresentation = (empty((string) $this->getLanguage()))
                ? ''
                : $this->getLanguage();
        } else {
            $textRepresentation = $this->getScript();
            $textRepresentation .= (empty((string) $this->getLanguage()))
                ? ''
                : ' (' . $this->getLanguage() . ')';
        }

        return $textRepresentation;
    }
}
