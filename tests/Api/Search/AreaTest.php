<?php
namespace MusicBrainz\Test\Api;

use MusicBrainz\Filter\Search\AreaFilter;
use MusicBrainz\Value\Alias;
use MusicBrainz\Value\AliasType;
use MusicBrainz\Value\Area;
use MusicBrainz\Value\AreaType;
use MusicBrainz\Value\Name;
use MusicBrainz\Value\SearchResult;
use MusicBrainz\Value\SearchResult\AreaList;

/**
 * Unit tests for the search API.
 */
class AreaTest extends ApiTestCase
{
    /**
     * Test instance of the area list
     *
     * @var AreaList
     */
    private static $areaList;

    /**
     * Sets up a mock object of the abstract HTTP adapter and the MusicBrainz API client to be tested.
     *
     * @return void
     */
    public function setUp(): void
    {
        if (!is_null(self::$areaList)) {
            return;
        }

        parent::setUp();

        /** Setting up the mock object of the abstract HTTP adapter */
        $this->expectApiCall(
            'area/',
            [
                'limit'  => 5,
                'offset' => 0,
                'fmt'    => 'json',
                'query' => 'area:Leipzig'
            ],
            'Search/Area.json'
        );

        /** Performing the test */
        $areaFilter = new AreaFilter;
        $areaFilter->addAreaName(new Name('Leipzig'));
        $pageFilter = new \MusicBrainz\Filter\PageFilter(0, 5);

        self::$areaList = $this->musicBrainz->api()->search()->area($areaFilter, $pageFilter);
    }

    /**
     * Tests, if Search::area() properly converts the given JSON response into a domain model and returns it.
     *
     * @return void
     */
    public function testArea(): void
    {
        $areaList = self::$areaList;

        /** Validating the search result list */
        $this->assertInstanceOf(AreaList::class, $areaList);

        $this->assertSame(2, count($areaList));

        $this->assertSame(2, $areaList->getCount()->getNumber());

        $this->assertSame(0, $areaList->getOffset()->getNumber());

        $this->assertSame('2017/07/09 17:54:44', (string) $areaList->getCreationTime());

        /**
         * Validating the first search result of the list
         *
         * @var SearchResult $searchResult The first search result of the list
         */
        $searchResult = $areaList[0];

        $this->assertInstanceOf(SearchResult::class, $searchResult);

        $this->assertSame(100, $searchResult->getScore()->getNumber());

        /**
         * Validating the value of the first search result.
         *
         * @var Area $area The value of the first search result
         */
        $area = $searchResult->getValue();

        $this->assertSame(AreaType::CITY, (string) $area->getAreaType());

        $this->assertEmpty((string) $area->getLifeSpan()->getBeginDate());

        $this->assertEmpty((string) $area->getLifeSpan()->getEndDate());

        $this->assertFalse($area->getLifeSpan()->getEnded()->isEnded());

        $this->assertSame('20619e36-fca8-4499-bcc8-be01a3ea3e41', (string) $area->getMBID());

        $this->assertSame('Leipzig', (string) $area->getName());

        $this->assertSame('Leipzig', (string) $area->getSortName());

        /**
         * Validating the alias list of the first search result
         *
         * @var Alias $alias The first alias of the list
         */
        $alias = $area->getAliases()[0];

        $this->assertSame(AliasType::AREA_NAME, (string) $alias->getAliasType());

        $this->assertEmpty((string) $alias->getBeginDate());

        $this->assertEmpty((string) $alias->getEndDate());

        $this->assertSame('ja', (string) $alias->getLocaleCode());

        $this->assertSame('ライプツィヒ', (string) $alias->getName());

        $this->assertTrue($alias->getPrimaryName()->isPrimaryName());

        $this->assertSame('ライプツィヒ', (string) $alias->getSortName());
    }
}
