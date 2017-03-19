<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\Title;

/**
 * Provides a getter for a title.
 */
trait GetTitleTrait
{
    /**
     * The title
     *
     * @var Title
     */
    public $title;

    /**
     * Returns the title.
     *
     * @return Title
     */
    public function getTitle(): Title
    {
        return $this->title;
    }

}
