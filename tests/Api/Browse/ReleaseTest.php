<?php
namespace MusicBrainz\Test\Api\Browse;

use MusicBrainz\Filter\Browse\Relation\Entity\ReleaseRelation;
use MusicBrainz\Filter\PageFilter;
use MusicBrainz\Supplement\Browse\ReleaseFields;
use MusicBrainz\Test\Api\ApiTestCase;
use MusicBrainz\Value\MBID;
use MusicBrainz\Value\Release;
use MusicBrainz\Value\ReleaseList;

/**
 * Unit tests for the browse release request
 */
class ReleaseTest extends ApiTestCase
{
    /**
     * Test instance of the artist list
     *
     * @var Release[]|ReleaseList
     */
    private static $releaseList;

    /**
     * Sets up a mock object of the abstract HTTP adapter and the MusicBrainz API client to be tested.
     *
     * @return void
     */
    public function setUp(): void
    {
        if (!is_null(self::$releaseList)) {
            return;
        }

        parent::setUp();

        /** Setting up the mock object of the abstract HTTP adapter */
        $this->expectApiCall(
            'release/',
            [
                'fmt'    => 'json',
                'limit'  => 25,
                'offset' => 0,
                'label'  => '47e718e1-7ee4-460c-b1cc-1192a841c6e5',
                'inc'    => 'annotation+artist-credits+discids+isrcs+labels+media+recordings+release-groups'
            ],
            'Browse/Release.json'
        );

        /** Performing the test */
        $releaseRelation = new ReleaseRelation;
        $releaseRelation->label(new MBID('47e718e1-7ee4-460c-b1cc-1192a841c6e5'));

        $releaseFields = (new ReleaseFields)
            ->includeReleaseGroups()
            ->includeRecordings()
            ->includeMedia()
            ->includeDiscIds()
            ->includeAnnotation()
            ->includeArtistCredits()
            ->includeIsrcs()
            ->includeLabels();

        self::$releaseList = $this->musicBrainz->api()->browse()->release($releaseRelation, $releaseFields, new PageFilter);
    }

    /**
     * Tests, if Search::artist() properly converts the given JSON response into a domain model and returns it.
     *
     * @return void
     */
    public function testArtist(): void
    {
        $releaseList = self::$releaseList;

        $this->assertInstanceOf(ReleaseList::class, $releaseList);
        $this->assertSame(25, count($releaseList));

        $release = $releaseList[0];

        $this->assertInstanceOf(Release::class, $release);
    }
}
