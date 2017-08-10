<?php

namespace MusicBrainz\Relation\RelationList\Property;

use MusicBrainz\Helper\ArrayAccess;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Relation\RelationList\RelationToUrlList;

/**
 * Provides a getter for the list of relations to an URL.
 */
trait UrlRelationsTrait
{
    /**
     * A list of relations to an URL
     *
     * @var RelationToUrlList
     */
    private $urlRelations;

    /**
     * Returns a list of relations to an URL.
     *
     * @return RelationToUrlList
     */
    public function getUrlRelations(): RelationToUrlList
    {
        return $this->urlRelations;
    }

    /**
     * Sets a list of relations to an URL by extracting it from a given input array.
     *
     * @param array $input An array returned by the webservice
     *
     * @return void
     */
    private function setUrlRelationsFromArray(array $input): void
    {
        $this->urlRelations = is_null($input = ArrayAccess::getArray($input, EntityType::URL))
            ? new RelationToUrlList
            : new RelationToUrlList($input);
    }
}
