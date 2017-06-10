<?php

namespace MusicBrainz\Filter\Search;

use AskLucy\Phrase;
use AskLucy\Term;
use MusicBrainz\Value\Country;
use MusicBrainz\Value\Date;
use MusicBrainz\Value\Disambiguation;
use MusicBrainz\Value\Format;
use MusicBrainz\Value\ISRC;
use MusicBrainz\Value\Length;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\MediumNumber;
use MusicBrainz\Value\Name;
use MusicBrainz\Value\ReleaseStatus;
use MusicBrainz\Value\ReleaseType;
use MusicBrainz\Value\Tag;
use MusicBrainz\Value\TrackNumber;

/**
 * A filter for searching recordings
 *
 * @link https://musicbrainz.org/doc/Development/XML_Web_Service/Version_2/Search#Place
 */
class RecordingFilter extends AbstractFilter
{
    /**
     * The artist's name, as it appears on the recording
     *
     * @var string
     */
    public const ALBUM_ARTIST_NAME = 'artist';

    /**
     * The artist ID
     *
     * @var string
     */
    public const ARTIST_ID = 'arid';

    /**
     * The name of an artist on the recording
     *
     * @var string
     */
    public const ARTIST_NAME = 'artistname';

    /**
     * The country, where the recording is released
     *
     * @var string
     */
    public const COUNTRY = 'country';

    /**
     * A name credit on the recording
     *
     * @var string
     */
    public const CREDIT_NAME = 'creditname';

    /**
     * The recording release date
     *
     * @var string
     */
    public const DATE = 'date';

    /**
     * The disambiguation comment for this recording
     *
     * @var string
     */
    public const DISAMBIGUATION = 'comment';

    /**
     * The duration of track in milliseconds
     *
     * @var string
     */
    public const LENGTH = 'dur';

    /**
     * The recording release format
     *
     * @var string
     */
    public const FORMAT = 'format';

    /**
     * Free text track number
     *
     * @var string
     */
    public const NUMBER = 'number';

    /**
     * The number of tracks in the medium on release
     *
     * @var string
     */
    public const NUMBER_OF_TRACKS_ON_MEDIUM = 'tracks';

    /**
     * The number of tracks on release as a whole
     *
     * @var string
     */
    public const NUMBER_OF_TRACKS_ON_RELEASE = 'tracksrelease';

    /**
     * The medium that the recording should be found on, first medium is position 1
     *
     * @var string
     */
    public const MEDIUM_NUMBER = 'position';

    /**
     * The International Standard Recording Code (ISRC) of the recording
     *
     * @var string
     */
    public const ISRC = 'isrc';

    /**
     * The primary type of the release group
     *
     * @var string
     */
    public const PRIMARY_TYPE = 'primarytype';

    /**
     * Quantized length (length / 2000)
     *
     * @var string
     */
    public const QUANTIZED_LENGTH = 'qdur';

    /**
     * The MusicBrainz ID (MBID) of the recording
     *
     * @var string
     */
    public const RECORDING_ID = 'rid';

    /**
     * The name of the recording or of a track associated with the recording (with accents)
     *
     * @var string
     */
    public const RECORDING_NAME_WITH_ACCENT = 'recordingaccent';

    /**
     * The name of the recording or of a track associated with the recording (without accents)
     *
     * @var string
     */
    public const RECORDING_NAME_WITHOUT_ACCENT = 'recording';

    /**
     * The MusicBrainz ID (MBID) of the release
     *
     * @var string
     */
    public const RELEASE_ID = 'reid';

    /**
     * The MusicBrainz ID (MBID) of the release group
     *
     * @var string
     */
    public const RELEASE_GROUP_ID = 'rgid';

    /**
     * The type of the release group
     * Old type mapping for when we did not have separate primary and secondary types or use standalone for standalone
     * recordings
     *
     * @var string
     */
    public const RELEASE_GROUP_TYPE = 'type';

    /**
     * The name of the release
     *
     * @var string
     */
    public const RELEASE_NAME = 'release';

    /**
     * The release status
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
     * A tag associated with the recording
     *
     * @var string
     */
    public const TAG = 'tag';

    /**
     * The MusicBrainz Id (MBID) of a track
     *
     * @var string
     */
    public const TRACK_ID = 'tid';

    /**
     * A track number on a medium
     *
     * @var string
     */
    public const TRACK_NUMBER = 'tnum';

    /**
     * True to only show video tracks
     *
     * @var string
     */
    public const VIDEO = 'video';

    /**
     * Adds an album artist name.
     *
     * @param Name $albumArtistName An album artist name
     *
     * @return Phrase
     */
    public function addAlbumArtistName(Name $albumArtistName): Phrase
    {
        return $this->addPhrase($albumArtistName, self::ALBUM_ARTIST_NAME);
    }

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
     * Adds an artist name.
     *
     * @param Name $artistName An artist name
     *
     * @return Phrase
     */
    public function addArtistName(Name $artistName): Phrase
    {
        return $this->addPhrase($artistName, self::ARTIST_NAME);
    }

    /**
     * Adds a country.
     *
     * @param Country $country A country
     *
     * @return Term
     */
    public function addCountry(Country $country): Term
    {
        return $this->addTerm($country, self::COUNTRY);
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
     * Adds the recording release date.
     *
     * @param Date $date The recording release date
     *
     * @return Term
     */
    public function addDate(Date $date): Term
    {
        return $this->addTerm($date, self::DATE);
    }

    /**
     * Adds the disambiguation comment for this recording.
     *
     * @param Disambiguation $disambiguation The disambiguation comment for this recording
     *
     * @return Phrase
     */
    public function addDisambiguationComment(Disambiguation $disambiguation): Phrase
    {
        return $this->addPhrase($disambiguation, self::DISAMBIGUATION);
    }

    /**
     * Adds the duration of track in milliseconds.
     *
     * @param Length $duration The duration of track in milliseconds
     *
     * @return Term
     */
    public function addLength(Length $duration): Term
    {
        return $this->addTerm($duration, self::LENGTH);
    }

    /**
     * Adds the recording release format.
     *
     * @param Format $format The recording release format
     *
     * @return Term
     */
    public function addFormat(Format $format): Term
    {
        return $this->addTerm($format, self::FORMAT);
    }

    /**
     * Adds a free text track number.
     *
     * @param TrackNumber $trackNumber A free text track number
     *
     * @return Term
     */
    public function addNumber(TrackNumber $trackNumber): Term
    {
        return $this->addTerm($trackNumber, self::NUMBER);
    }

    /**
     * Adds the number of tracks in the medium on release.
     *
     * @param TrackNumber $numberOfTracksOnMedium The number of tracks in the medium on release
     *
     * @return Term
     */
    public function addNumberOfTracksOnMedium(TrackNumber $numberOfTracksOnMedium): Term
    {
        return $this->addTerm($numberOfTracksOnMedium, self::NUMBER_OF_TRACKS_ON_MEDIUM);
    }

    /**
     * Adds the number of tracks on release as a whole.
     *
     * @param TrackNumber $numberOfTracksOnRelease The number of tracks on release as a whole
     *
     * @return Term
     */
    public function addNumberOfTracksOnRelease(TrackNumber $numberOfTracksOnRelease): Term
    {
        return $this->addTerm($numberOfTracksOnRelease, self::NUMBER_OF_TRACKS_ON_RELEASE);
    }

    /**
     * Adds a medium number.
     *
     * @param MediumNumber $mediumNumber A medium number
     *
     * @return Term
     */
    public function addMediumNumber(MediumNumber $mediumNumber): Term
    {
        return $this->addTerm($mediumNumber, self::MEDIUM_NUMBER);
    }

    /**
     * Adds the International Standard Recording Code (ISRC) of the recording.
     *
     * @param ISRC $isrc The International Standard Recording Code (ISRC) of the recording
     *
     * @return Term
     */
    public function addISRC(ISRC $isrc): Term
    {
        return $this->addTerm($isrc, self::ISRC);
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
     * Adds the quantized length (length / 2000).
     *
     * @param Length $duration The quantized length (length / 2000)
     *
     * @return Term
     */
    public function addQuantizedLength(Length $duration): Term
    {
        return $this->addTerm($duration, self::QUANTIZED_LENGTH);
    }

    /**
     * Adds the MusicBrainz Identifier (MBID) of the recording.
     *
     * @param MBID $recordingId The MusicBrainz Identifier (MBID) of the recording
     *
     * @return Term
     */
    public function addRecordingId(MBID $recordingId): Term
    {
        return $this->addTerm($recordingId, self::RECORDING_ID);
    }

    /**
     * Adds the name of the recording or of a track associated with the recording (with accents).
     *
     * @param Name $recordingNameWithAccent The name of the recording or of a track associated with the recording (with
     *                                      accents)
     *
     * @return Phrase
     */
    public function addRecordingNameWithAccent(Name $recordingNameWithAccent): Phrase
    {
        return $this->addPhrase($recordingNameWithAccent, self::RECORDING_NAME_WITH_ACCENT);
    }

    /**
     * Adds the name of the recording or of a track associated with the recording (without accents).
     *
     * @param Name $recordingNameWithoutAccent The name of the recording or of a track associated with the recording
     *                                         (without accents)
     *
     * @return Phrase
     */
    public function addRecordingNameWithoutAccent(Name $recordingNameWithoutAccent): Phrase
    {
        return $this->addPhrase($recordingNameWithoutAccent, self::RECORDING_NAME_WITHOUT_ACCENT);
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
     * Adds the type of the release group.
     *
     * @param ReleaseType $primaryType The type of the release group
     *
     * @return Term
     */
    public function addReleaseGroupType(ReleaseType $releaseGroupType): Term
    {
        return $this->addTerm($releaseGroupType, self::RELEASE_GROUP_TYPE);
    }

    /**
     * Adds the name of the release.
     *
     * @param Name $releaseName The name of the release
     *
     * @return Phrase
     */
    public function addReleaseName(Name $releaseName): Phrase
    {
        return $this->addPhrase($releaseName, self::RELEASE_NAME);
    }

    /**
     * Adds the release status.
     *
     * @param ReleaseStatus $releaseStatus The release status
     *
     * @return Term
     */
    public function addReleaseStatus(ReleaseStatus $releaseStatus): Term
    {
        return $this->addPhrase($releaseStatus, self::RELEASE_STATUS);
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
     * Adds a tag associated with the recording.
     *
     * @param Tag $tag A tag associated with the recording
     *
     * @return Phrase
     */
    public function addTag(Tag $tag): Phrase
    {
        return $this->addPhrase($tag, self::TAG);
    }

    /**
     * Adds the MusicBrainz Id (MBID) of a track.
     *
     * @param MBID $tag The MusicBrainz Id (MBID) of a track
     *
     * @return Term
     */
    public function addTrackId(MBID $tag): Term
    {
        return $this->addTerm($tag, self::TRACK_ID);
    }

    /**
     * Adds track number on a medium.
     *
     * @param TrackNumber $trackNumber A track number on a medium
     *
     * @return Term
     */
    public function addTrackNumber(TrackNumber $trackNumber): Term
    {
        return $this->addTerm($trackNumber, self::TRACK_NUMBER);
    }

    /**
     * Adds a flag to only show video tracks.
     *
     * @param bool $video True to only show video tracks, otherwise false
     *
     * @return Term
     */
    public function addVideo(bool $video): Term
    {
        return $this->addTerm($video, self::VIDEO);
    }
}
