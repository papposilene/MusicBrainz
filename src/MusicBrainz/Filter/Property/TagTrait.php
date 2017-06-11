<?php
namespace MusicBrainz\Filter\Property;

use AskLucy\Term;
use MusicBrainz\Value\Tag;

trait TagTrait
{
    use AbstractAdderTrait;

    /**
     * Returns the field name for the tag.
     *
     * @return string
     */
    public static function tag(): string
    {
        return 'tag';
    }

    /**
     * Adds a tag.
     *
     * @param Tag $tag The tag
     *
     * @return Term
     */
    public function addTag(Tag $tag): Term
    {
        return $this->addTerm($tag, self::tag());
    }
}