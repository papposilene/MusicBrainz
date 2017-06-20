<?php

namespace MusicBrainz\Value;

use MusicBrainz\Value;

/**
 * An artist credit
 */
class ArtistCredit implements Value
{
    use Property\NameTrait;
    use Property\ArtistTrait;
    use Property\JoinPhraseTrait;

    /**
     * Constructs an artist credit.
     *
     * @param array $artistCredit An array of information about the artist credit
     */
    public function __construct(array $artistCredit)
    {
        $this->name       = new Name(isset($artistCredit['name']) ? (string) $artistCredit['name'] : '');
        $this->artist     = new ArtistType(isset($artistCredit['artist']) ? (string) $artistCredit['artist'] : '');
        $this->joinPhrase = new JoinPhrase(isset($artistCredit['joinphrase']) ? (string) $artistCredit['joinphrase'] : '');
    }

    /**
     * Returns the artist credit as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        $joinPhrase = (empty($this->getJoinPhrase())) ? '' : $this->getJoinPhrase() . ' ';

        return $joinPhrase . $this->getName();
    }
}
