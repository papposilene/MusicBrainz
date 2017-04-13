<?php

namespace MusicBrainz\Value;

/**
 * A text representation
 */
class TextRepresentation
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
}
