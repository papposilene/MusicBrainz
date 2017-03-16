<?php

namespace MusicBrainz\Value;

/**
 * Flag for a primary name
 *
 * @link http://www.iasa-web.org/icat/08_0.htm
 * @link https://musicbrainz.org/doc/Label/Label_Code
 */
class PrimaryName
{
    /**
     * The Label Code with "LC-" prefix and 5 digits
     *
     * @var string
     */
    private $code;

    /**
     * Constructs a Label Code.
     *
     * @param string $labelCode A label code
     */
    public function __construct(string $labelCode = '')
    {
        $this->labelCode = $this->getNormalizedLabelCode($labelCode);
    }

    /**
     * Returns true, if the given string is a valid Label Code, otherwise false.
     *
     * The code
     * - must be a number between 1 and 99999
     * - may be prefixed by "LC" (case insensitive), where the prefix may be separated with a dash ("-"), or a space (" ")
     *
     * @param string $labelCode
     *
     * @return bool
     */
    private function isValidLabelCode(string $labelCode)
    {
        return (bool) preg_match('/^(LC)?[-| ]?(?=.*[1-9].*)[0-9]{1,5}$/i', $labelCode);
    }

    /**
     * Normalizes a given label code to the format "LC-01234" and returns the result. Returns an empty string for an
     * invalid code given.
     *
     * @param string $labelCode A Label Code
     *
     * @return string
     */
    private function getNormalizedLabelCode(string $labelCode)
    {
        return ($this->isValidLabelCode($labelCode))
            ? 'LC-' . str_pad(
                (string) abs(filter_var($labelCode, FILTER_SANITIZE_NUMBER_INT)),
                5,
                '0',
                STR_PAD_LEFT
            )
            : '';
    }

    /**
     * Returns the Label Code with "LC-" prefix and 5 digits.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->code;
    }
}
