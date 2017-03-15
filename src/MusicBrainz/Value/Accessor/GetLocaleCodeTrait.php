<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\LocaleCode;

/**
 * Provides a getter for the locale code.
 */
trait GetLocaleCodeTrait
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
    public function getGender(): LocaleCode
    {
        return $this->localeCode;
    }
}
