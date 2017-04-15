<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\EditorName;

/**
 * Provides a getter for an editor name.
 */
trait EditorNameTrait
{
    /**
     * The editor name
     *
     * @var EditorName
     */
    public $editorName;

    /**
     * Returns the editor name.
     *
     * @return EditorName
     */
    public function getEditorName(): EditorName
    {
        return $this->editorName;
    }
}
