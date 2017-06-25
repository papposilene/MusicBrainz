<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\LocaleCode;

/**
 * Provides a getter for the locale code.
 */
trait LocaleCodeTrait
{
    /**
     * The locale code
     *
     * @var LocaleCode
     */
    private $localeCode;

    /**
     * Returns the locale code.
     *
     * @return LocaleCode
     */
    public function getLocaleCode(): LocaleCode
    {
        return $this->localeCode;
    }
}
