<?php
namespace MusicBrainz\Filter\Property;

use AskLucy\Phrase;
use MusicBrainz\Value\Name;

trait LabelNameTrait
{
    use AbstractAdderTrait;

    /**
     * Returns the field name for the label name.
     *
     * @return string
     */
    public static function labelName(): string
    {
        return 'label';
    }

    /**
     * Adds the label's name (with accented characters).
     *
     * @param Name $labelNameWithAccents The label's name (with accented characters)
     *
     * @return Phrase
     */
    public function addLabelNameWithAccents(Name $labelNameWithAccents): Phrase
    {
        return $this->addPhrase($labelNameWithAccents, self::labelName());
    }
}