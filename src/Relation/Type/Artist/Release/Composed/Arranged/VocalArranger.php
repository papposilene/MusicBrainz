<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Composed\Arranged;

use MusicBrainz\Value\Name;

/**
 * This indicates the person who orchestrated the release. Orchestration is a special type of arrangement. It means the
 * adaptation of a composition for an orchestra, done in a way that the musical substance remains essentially unchanged.
 * The orchestrator is also responsible for writing scores for an orchestra, band, choral group, individual
 * instrumentalist(s) or vocalist(s). In practical terms it consists of deciding which instruments should play which
 * notes in a piece of music.
 *
 * @link https://musicbrainz.org/relationship/d7d9128d-e676-4d8f-a353-f48a55a98501
 */
class VocalArranger extends InstrumentArranger
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('vocal arranger');
    }
}
