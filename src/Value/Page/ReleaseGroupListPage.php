<?php

namespace MusicBrainz\Value\Page;

use MusicBrainz\Value\ReleaseGroup;
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
