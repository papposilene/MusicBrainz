<?php

namespace MusicBrainz\Filter\Search;

/**
 * A filter for searching annotations
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search#Annotation
 */
class AnnotationFilter
{
    use \MusicBrainz\Filter\Property\EntityIdTrait;
    use \MusicBrainz\Filter\Property\EntityNameTrait;
    use \MusicBrainz\Filter\Property\EntityTypeTrait;
    use \MusicBrainz\Filter\Property\TextTrait;
}
