<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Language;

/**
 * Provides a getter for a language.
 */
trait LanguageTrait
{
    /**
     * The language
     *
     * @var Language
     */
    public $language;

    /**
     * Returns the language.
     *
     * @return Language
     */
    public function getLanguage(): Language
    {
        return $this->language;
    }

}
