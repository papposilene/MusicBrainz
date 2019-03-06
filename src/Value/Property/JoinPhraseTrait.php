<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Helper\ArrayAccess;
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

    /**
     * Sets the join phrase by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setJoinPhraseFromArray(array $input): void
    {
        $this->name = is_null($name = ArrayAccess::getString($input, 'joinphrase'))
            ? new JoinPhrase
            : new JoinPhrase($name);
    }
}
