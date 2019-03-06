<?php

namespace MusicBrainz\Value\Page\SearchResult;

use MusicBrainz\Value\SearchResult\ReleaseGroup;
use MusicBrainz\Value\Page;

/**
 * A list of values
 */
class ReleaseGroupListPage extends Page
{
    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return ReleaseGroup::class;
    }
}
