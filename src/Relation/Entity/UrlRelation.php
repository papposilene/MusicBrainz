<?php

namespace MusicBrainz\Relation\Entity;

use MusicBrainz\Relation\AbstractRelation;

/**
 * A relation between an URL and another entity.
 */
class UrlRelation extends AbstractRelation
{
    use \MusicBrainz\Relation\RelatedEntity\RecourceTrait;
}
