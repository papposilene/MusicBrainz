<?php

namespace MusicBrainz\Value\Page;

use MusicBrainz\Value\Series;
use MusicBrainz\Value\Page;

/**
 * A list of values
 */
class SeriesListPage extends Page
{
    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return Series::class;
    }
}
