<?php

namespace MusicBrainz\Value\Page\SearchResult;

use MusicBrainz\Value\SearchResult\Artist;
use MusicBrainz\Value\Page;

/**
 * A list of values
 */
class ArtistListPage extends Page
{
    /**
     * Returns the class name of the list elements.
     *
     * @return string
     */
    public static function getType(): string
    {
        return Artist::class;
    }
}
