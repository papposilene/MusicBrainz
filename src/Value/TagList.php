<?php

namespace MusicBrainz\Value;

/**
 * A list of tags
 *
 * @see https://musicbrainz.org/doc/Aliases
 */
class TagList extends ValueList
{
    /**
     * Constructs a list of tags.
     *
     * @param array $tags An array tag arrays
     */
    public function __construct(array $tags = [])
    {
        parent::__construct(
            array_map(
                function($tag) {
                    return new Tag($tag);
                },
                $tags
            )
        );
    }

    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return Tag::class;
    }
}
