<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\JoinPhrase;

/**
 * Provides a getter for a joinPhrase.
 */
trait JoinPhraseTrait
{
    /**
     * The join phrase
     *
     * @var JoinPhrase
     */
    public $joinPhrase;

    /**
     * Returns the joinPhrase.
     *
     * @return JoinPhrase
     */
    public function getJoinPhrase(): JoinPhrase
    {
        return $this->joinPhrase;
    }

}
