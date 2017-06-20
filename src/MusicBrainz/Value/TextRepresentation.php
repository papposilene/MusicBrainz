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
        $this->language = new Language(isset($textRepresentation['language']) ? $textRepresentation['language'] : '');
        $this->script   = new Script(isset($textRepresentation['script']) ? $textRepresentation['script'] : '');
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
