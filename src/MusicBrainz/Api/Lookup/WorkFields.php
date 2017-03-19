<?php

namespace MusicBrainz\Api\Lookup;

class WorkFields
{
    use Field\ArtistsTrait;
    use Field\AliasesTrait;
    use Field\TagsTrait;
    use Field\UserTagsTrait;
    use Field\RatingsTrait;
    use Field\UserRatingsTrait;
    use Field\ArtistRelationsTrait;
    use Field\LabelRelationsTrait;
    use Field\RecordingRelationsTrait;
    use Field\ReleaseRelationsTrait;
    use Field\ReleaseGroupsTrait;
    use Field\URLRelationsTrait;
    use Field\WorkRelationsTrait;
    use Field\AnnotationTrait;
}
