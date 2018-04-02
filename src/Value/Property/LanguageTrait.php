<?php
namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the language by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setLanguageFromArray(array $input): void
    {
        $this->language = is_null($language = ArrayAccess::getString($input, 'language'))
            ? new Language
            : new Language($language);
    }
}
