<?php

namespace MusicBrainz\Api\Lookup;

class ArtistFields
{
    use Field\RecordingsTrait;
    use Field\ReleaseGroupsTrait;
    use Field\ReleasesTrait;
    use Field\WorksTrait;
    use Field\VariousArtistsTrait;
    use Field\DiscIdsTrait;
    use Field\MediaTrait;
    use Field\AliasesTrait;
    use Field\TagsTrait;
    use Field\UserTagsTrait;
    use Field\RatingsTrait;
    use Field\UserRatingsTrait;
    use Field\ArtistRelationsTrait;
    use Field\LabelRelationsTrait;
    use Field\RecordingRelationsTrait;
    use Field\ReleaseRelationsTrait;
    use Field\ReleaseGroupRelationsTrait;
    use Field\URLRelationsTrait;
    use Field\WorkRelationsTrait;
    use Field\AnnotationTrait;
}
