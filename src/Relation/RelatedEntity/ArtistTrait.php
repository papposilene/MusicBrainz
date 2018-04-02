<?php
namespace MusicBrainz\Relation\RelatedEntity;

use MusicBrainz\Value\EntityType;

/**
 * Provides a setter for the entity type artist.
 */
trait ArtistTrait
{
    /**
     * Sets the entity type artist.
     *
     * @return void
     */
    public function setEntityTypeArtist(): void
    {
        $this->setEntityType(new EntityType(EntityType::ARTIST));
    }
}
