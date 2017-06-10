<?php

namespace MusicBrainz\Filter\Search;
use AskLucy\Phrase;
use AskLucy\Term;
use MusicBrainz\Value\Count;
use MusicBrainz\Value\Disambiguation;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Name;
use MusicBrainz\Value\ReleaseStatus;
use MusicBrainz\Value\ReleaseType;
use MusicBrainz\Value\Tag;

/**
 * A filter for searching release groups
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search#Release_Group
 */
class ReleaseGroupFilter extends AbstractFilter
{
    /**
     * The MusicBrainz Identifier (MBID) of the artist
     *
     * @var string
     */
    public const ARTIST_ID = 'arid';

    /**
     * An artist name, as it appears on the recording
     *
     * @var string
     */
    public const ARTIST_NAME = 'artist';

    /**
     * The “real name” of any artist that is included in the release group’s artist credit
     *
     * @var string
     */
    public const ARTIST_REAL_NAME = 'artistname';

    /**
     * The release group's disambiguation comment
     *
     * @var string
     */
    public const DISAMBIGUATION = 'comment';

    /**
     * A name credit on the recording
     *
     * @var string
     */
    public const CREDIT_NAME = 'creditname';

    /**
     * The primary type of the release group
     *
     * @var string
     */
    public const PRIMARY_TYPE = 'primarytype';

    /**
     * The MusicBrainz ID (MBID) of the release group
     *
     * @var string
     */
    public const RELEASE_GROUP_ID = 'rgid';

    /**
     * The name of the release group (with accents)
     *
     * @var string
     */
    public const RELEASE_GROUP_NAME_WITH_ACCENTS = 'releasegroupaccent';

    /**
     * The name of the release group (without accents)
     *
     * @var string
     */
    public const RELEASE_GROUP_NAME_WITHOUT_ACCENTS = 'releasegroup';

    /**
     * The number of releases in this release group
     *
     * @var string
     */
    public const NUMBER_OF_RELEASES = 'releases';

    /**
     * The type of the release group
     * Old type mapping for when we did not have separate primary and secondary types or use standalone for standalone
     * recordings
     *
     * @var string
     */
    public const RELEASE_GROUP_TYPE = 'type';

    /**
     * The MusicBrainz ID (MBID) of a release
     *
     * @var string
     */
    public const RELEASE_ID = 'reid';

    /**
     * The name of a release
     *
     * @var string
     */
    public const RELEASE_NAME = 'release';

    /**
     * A release status of a release that appears within this release group
     *
     * @var string
     */
    public const RELEASE_STATUS = 'status';

    /**
     * The secondary type of the release group (audiobook, compilation, interview, live, remix soundtrack, spokenword)
     *
     * @var string
     */
    public const SECONDARY_TYPE = 'secondarytype';

    /**
     * A tag associated with the release group
     *
     * @var string
     */
    public const TAG = 'tag';

    /**
     * Adds the MusicBrainz Identifier (MBID) of the artist.
     *
     * @param MBID $artistId The MusicBrainz Identifier (MBID) of the artist
     *
     * @return Term
     */
    public function addArtistId(MBID $artistId): Term
    {
        return $this->addTerm($artistId, self::ARTIST_ID);
    }

    /**
     * Adds an artist name, as it appears on the recording.
     *
     * @param Name $artistName An artist name, as it appears on the recording
     *
     * @return Phrase
     */
    public function addArtistName(Name $artistName): Phrase
    {
        return $this->addPhrase($artistName, self::ARTIST_NAME);
    }

    /**
     * Adds a “real name” of any artist that is included in the release group’s artist credit.
     *
     * @param Name $artistRealName A “real name” of any artist that is included in the release group’s artist credit
     *
     * @return Phrase
     */
    public function addArtistRealName(Name $artistRealName): Phrase
    {
        return $this->addPhrase($artistRealName, self::ARTIST_REAL_NAME);
    }

    /**
     * Adds the release group's disambiguation comment.
     *
     * @param Disambiguation $disambiguation The release group's disambiguation comment
     *
     * @return Phrase
     */
    public function addDisambiguationComment(Disambiguation $disambiguation): Phrase
    {
        return $this->addPhrase($disambiguation, self::DISAMBIGUATION);
    }

    /**
     * Adds a name credit on the recording.
     *
     * @param Name $creditName A name credit on the recording
     *
     * @return Phrase
     */
    public function addCreditName(Name $creditName): Phrase
    {
        return $this->addPhrase($creditName, self::CREDIT_NAME);
    }

    /**
     * Adds the primary release type of the release group.
     *
     * @param ReleaseType $primaryType The primary release type of the release group
     *
     * @return Term
     */
    public function addPrimaryType(ReleaseType $primaryType): Term
    {
        return $this->addTerm($primaryType, self::PRIMARY_TYPE);
    }

    /**
     * Adds the MusicBrainz ID (MBID) of the release group.
     *
     * @param Name $recordingNameWithoutAccent The MusicBrainz ID (MBID) of the release group
     *
     * @return Phrase
     */
    public function addReleaseGroupId(Name $releaseGroupId): Phrase
    {
        return $this->addPhrase($releaseGroupId, self::RELEASE_GROUP_ID);
    }

    /**
     * Adds the name of the release group (with accents).
     *
     * @param Name $releaseGroupNameWithAccents The name of the release group (with accents)
     *
     * @return Phrase
     */
    public function addReleaseGroupNameWithAccents(Name $releaseGroupNameWithAccents): Phrase
    {
        return $this->addPhrase($releaseGroupNameWithAccents, self::RELEASE_GROUP_NAME_WITH_ACCENTS);
    }

    /**
     * Adds the name of the release group (without accents).
     *
     * @param Name $releaseGroupNameWithoutAccents The name of the release group (without accents)
     *
     * @return Phrase
     */
    public function addReleaseGroupNameWithoutAccents(Name $releaseGroupNameWithoutAccents): Phrase
    {
        return $this->addPhrase($releaseGroupNameWithoutAccents, self::RELEASE_GROUP_NAME_WITHOUT_ACCENTS);
    }

    /**
     * Adds the number of releases in this release group.
     *
     * @param Count $numberOfReleases The number of releases in the release group
     *
     * @return Term
     */
    public function addNumberOfReleases(Count $numberOfReleases): Term
    {
        return $this->addTerm($numberOfReleases, self::NUMBER_OF_RELEASES);
    }

    /**
     * Adds the type of the release group.
     *
     * @param ReleaseType $releaseGroupType The type of the release group
     *
     * @return Term
     */
    public function addReleaseGroupType(ReleaseType $releaseGroupType): Term
    {
        return $this->addTerm($releaseGroupType, self::RELEASE_GROUP_TYPE);
    }

    /**
     * Adds the MusicBrainz ID of a release.
     *
     * @param MBID $releaseId The MusicBrainz ID of a release
     *
     * @return Term
     */
    public function addReleaseId(MBID $releaseId): Term
    {
        return $this->addTerm($releaseId, self::RELEASE_ID);
    }

    /**
     * Adds the name of a release.
     *
     * @param Name $releaseName The name of a release
     *
     * @return Phrase
     */
    public function addReleaseName(Name $releaseName): Phrase
    {
        return $this->addPhrase($releaseName, self::RELEASE_NAME);
    }

    /**
     * Adds a release status of a release that appears within this release group.
     *
     * @param ReleaseStatus $releaseStatus A release status of a release that appears within this release group
     *
     * @return Term
     */
    public function addReleaseStatus(ReleaseStatus $releaseStatus): Term
    {
        return $this->addTerm($releaseStatus, self::RELEASE_STATUS);
    }

    /**
     * Adds the secondary release type of the release group.
     *
     * @param ReleaseType $secondaryType The secondary release type of the release group
     *
     * @return Term
     */
    public function addSecondaryType(ReleaseType $secondaryType): Term
    {
        return $this->addTerm($secondaryType, self::SECONDARY_TYPE);
    }

    /**
     * Adds a tag associated with the release group.
     *
     * @param Tag $tag A tag associated with the release group
     *
     * @return Phrase
     */
    public function addTag(Tag $tag): Phrase
    {
        return $this->addPhrase($tag, self::TAG);
    }
}
