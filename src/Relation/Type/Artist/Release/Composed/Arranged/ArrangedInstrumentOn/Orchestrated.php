<?php

namespace MusicBrainz\Relation\Type\Artist\Release\Composed\Arranged\ArrangedInstrumentOn;

use MusicBrainz\Relation\Type\Artist\Release\Composed\Arranged\ArrangedInstrumentOn;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;

/**
 * An "orchestrated" relation
 * This indicates the person who orchestrated the recording. Orchestration is a special type of arrangement. It means
 * the adaptation of a composition for an orchestra, done in a way that the musical substance remains essentially
 * unchanged. The orchestrator is also responsible for writing scores for an orchestra, band, choral group, individual
 * instrumentalist(s) or vocalist(s). In practical terms it consists of deciding which instruments should play which
 * notes in a piece of music.
 *
 * @link https://musicbrainz.org/relationship/38fa7405-f9a5-48cb-827a-8ac601933ba0
 */
class Orchestrated extends ArrangedInstrumentOn
{
    /**
     * Returns the name of the relation.
     *
     * @return Name
     */
    public static function getRelationName(): Name
    {
        return new Name('orchestrator');
    }
}
