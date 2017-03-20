<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\MBID;

/**
 * Provides accessors for the MusicBrainz Identifier (MBID) of the label.
 */
trait LabelIdTrait
{
    /**
     * The MusicBrainz Identifier (MBID) of the label.
     *
     * @var MBID
     */
    private $labelId;

    /**
     * Returns the MusicBrainz Identifier (MBID) of the label.
     *
     * @return MBID
     */
    public function getLabelId(): MBID
    {
        return $this->labelId;
    }

    /**
     * Sets the MusicBrainz Identifier (MBID) of the label.
     *
     * @param MBID $labelId The MusicBrainz Identifier (MBID) of the label
     *
     * @return self
     */
    public function setLabelId(MBID $labelId): self
    {
        $this->labelId = $labelId;

        return $this;
    }
}
