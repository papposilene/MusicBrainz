<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToArtistList;

/**
 * Provides a getter for the list of relations to an artist.
 */
trait ArtistRelationsTrait
{
    /**
     * A list of relations to an artist
     *
     * @var RelationToArtistList
     */
    private $artistRelations;

    /**
     * Returns a list of relations to an artist.
     *
     * @return RelationToArtistList
     */
    public function getArtistRelations(): RelationToArtistList
    {
        return $this->artistRelations;
    }

    /**
     * Sets a list of relations to an artist by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setArtistRelationsFromArray(array $input): void
    {
        $this->artistRelations = is_null($input = ArrayAccess::getArray($input, EntityType::ARTIST))
            ? new RelationToArtistList
            : new RelationToArtistList($input);
    }
}
