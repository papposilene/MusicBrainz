<?php

namespace MusicBrainz\Api\Lookup;

class ReleaseFields
{
    use Field\ArtistsTrait;
    use Field\LabelsTrait;
    use Field\RecordingsTrait;
    use Field\ReleaseGroupsTrait;
    use Field\MediaTrait;
    use Field\ArtistCreditsTrait;
    use Field\DiscIdsTrait;
    use Field\ArtistRelationsTrait;
    use Field\LabelRelationsTrait;
    use Field\RecordingRelationsTrait;
    use Field\ReleaseRelationsTrait;
    use Field\ReleaseGroupRelationsTrait;
    use Field\URLRelationsTrait;
    use Field\WorkRelationsTrait;
    use Field\RecordingLevelRelationsTrait;
    use Field\WorkLevelRelationsTrait;
    use Field\AnnotationTrait;
    use Field\AliasesTrait;
}
