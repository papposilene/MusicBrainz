<?php

namespace MusicBrainz\Value\Page\SearchResult;

use MusicBrainz\Value\SearchResult\Area;
use MusicBrainz\Value\Page;

/**
 * A list of values
 */
class AreaListPage extends Page
{
    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return Area::class;
    }
}
