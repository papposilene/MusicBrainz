<?php
namespace MusicBrainz\Test\Api;

use MusicBrainz\Filter\Search\AnnotationFilter;
use MusicBrainz\Filter\Search\AreaFilter;
use MusicBrainz\HttpAdapter\AbstractHttpAdapter;
use MusicBrainz\MusicBrainz;
use MusicBrainz\Value\Alias;
use MusicBrainz\Value\AliasType;
use MusicBrainz\Value\Annotation;
use MusicBrainz\Value\AnnotationText;
use MusicBrainz\Value\Area;
use MusicBrainz\Value\AreaType;
use MusicBrainz\Value\EntityType;
use MusicBrainz\Value\Name;
use MusicBrainz\Value\SearchResult;
use MusicBrainz\Value\SearchResult\AnnotationList;
use MusicBrainz\Value\SearchResult\AreaList;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the search API.
 */
class SearchTest extends TestCase
{
    /**
     * A mock object of the abstract HTTP adapter
     *
     * @var \PHPUnit_Framework_MockObject_MockObject|AbstractHttpAdapter
     */
    private $httpAdapter;

    /**
     * The MusicBrainz API client
     *
     * @var MusicBrainz
     */
    private $musicBrainz;

    /**
     * Sets up a mock object of the abstract HTTP adapter and the MusicBrainz API client to be tested.
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->httpAdapter = $this->getMockBuilder('\MusicBrainz\HttpAdapter\AbstractHttpAdapter')
            ->setMethods(['call'])
            ->getMockForAbstractClass();

        $this->musicBrainz = new \MusicBrainz\MusicBrainz($this->httpAdapter);
    }

    /**
     * Tests, if Search::annotation() properly converts the given JSON response into a domain model and returns it.
     *
     * @return void
     */
    public function testAnnotaion(): void
    {
        /** Setting up the mock object of the abstract HTTP adapter */
        $this->expectApiCall(
            'annotation/',
            [
                'limit'  => 5,
                'offset' => 0,
                'fmt'    => 'json',
                'query'  => 'text:awesome'
            ],
            'Annotation.json'
        );

        /** Performing the test */
        $annotationFilter = new AnnotationFilter;
        $annotationFilter->addAnnotationText(new AnnotationText('awesome'));
        $pageFilter = new \MusicBrainz\Filter\PageFilter(0, 5);

        $result = $this->musicBrainz->api()->search()->annotation($annotationFilter, $pageFilter);

        /** Validating the search result list */
        $this->assertInstanceOf(
            AnnotationList::class,
            $result,
            'Expected Search::annotation() to return a search result list of annotations.'
        );

        $this->assertSame(
            5,
            count($result),
            'Expected the number of returned search results to be 5, as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            68,
            $result->getCount()->getNumber(),
            'Expected the total number of search results to be 68, as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            0,
            $result->getOffset()->getNumber(),
            'Expected the offset to be 0, as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            '2017/07/09 11:49:48',
            (string) $result->getCreationTime(),
            'Expected the creation time to be "2017/07/09 11:49:48", as given in Fixtures/Search/Annotation.json.'
        );

        /**
         * Validating the first search result of the list
         *
         * @var SearchResult $searchResult The first search result of the list
         */
        $searchResult = $result[0];

        $this->assertInstanceOf(
            SearchResult::class,
            $searchResult
        );

        $this->assertSame(
            100,
            $searchResult->getScore()->getNumber()
        );

        /**
         * Validating the value of the first search result.
         *
         * @var Annotation $annotation The value of the first search result
         */
        $annotation = $searchResult->getValue();

        $this->assertSame(
            'Label: Awesome Arts - Cat#: AA001',
            (string) $annotation->getAnnotationText(),
            'Expected the text of the first annotation to be "Label: Awesome Arts - Cat#: AA001", as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            '6370e01e-4fd4-49c4-858b-6f1df7c7fe91',
            (string) $annotation->getMBID(),
            'Expected the MusicBrainz Identifier (MBID) of the annotated entity to be "6370e01e-4fd4-49c4-858b-6f1df7c7fe91", as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            EntityType::RELEASE,
            (string) $annotation->getEntityType(),
            'Expected the annotated entity to be of type release, as given in Fixtures/Search/Annotation.json.'
        );

        $this->assertSame(
            'Echo Ricochet',
            (string) $annotation->getName(),
            'Expected the name of the annotated entity to be "Echo Ricochet", as given in Fixtures/Search/Annotation.json.'
        );
    }

    /**
     * Tests, if Search::area() properly converts the given JSON response into a domain model and returns it.
     *
     * @return void
     */
    public function testArea(): void
    {
        /** Setting up the mock object of the abstract HTTP adapter */
        $this->expectApiCall(
            'area/',
            [
                'limit'  => 5,
                'offset' => 0,
                'fmt'    => 'json',
                'query'  => 'area:Leipzig'
            ],
            'Area.json'
        );

        /** Performing the test */
        $areaFilter = new AreaFilter;
        $areaFilter->addAreaName(new Name('Leipzig'));
        $pageFilter = new \MusicBrainz\Filter\PageFilter(0, 5);

        $result = $this->musicBrainz->api()->search()->area($areaFilter, $pageFilter);

        /** Validating the search result list */
        $this->assertInstanceOf(
            AreaList::class,
            $result,
            'Expected Search::area() to return a search result list of areas.'
        );

        $this->assertSame(
            2,
            count($result),
            'Expected the number of returned search results to be 2, as given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            2,
            $result->getCount()->getNumber(),
            'Expected the total number of search results to be 2, as given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            0,
            $result->getOffset()->getNumber(),
            'Expected the offset to be 0, as given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            '2017/07/09 17:54:44',
            (string) $result->getCreationTime(),
            'Expected the creation time to be "2017-07-09 17:54:44", as given in Fixtures/Search/Area.json.'
        );

        /**
         * Validating the first search result of the list
         *
         * @var SearchResult $searchResult The first search result of the list
         */
        $searchResult = $result[0];

        $this->assertInstanceOf(
            SearchResult::class,
            $searchResult
        );

        $this->assertSame(
            100,
            $searchResult->getScore()->getNumber()
        );

        /**
         * Validating the value of the first search result.
         *
         * @var Area $area The value of the first search result
         */
        $area = $searchResult->getValue();

        $this->assertSame(
            AreaType::CITY,
            (string) $area->getAreaType(),
            'Expected the first area to be of type city, as given in Fixtures/Search/Area.json.'
        );

        $this->assertEmpty(
            (string) $area->getLifeSpan()->getBeginDate(),
            'Expected the beginning date to be unset, as not given in Fixtures/Search/Area.json.'
        );

        $this->assertEmpty(
            (string) $area->getLifeSpan()->getEndDate(),
            'Expected the ending date to be unset, as not given in Fixtures/Search/Area.json.'
        );

        $this->assertFalse(
            $area->getLifeSpan()->getEnded()->isEnded(),
            'Expected the first area not to be ended, as given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            '20619e36-fca8-4499-bcc8-be01a3ea3e41',
            (string) $area->getMBID(),
            'Expected the MusicBrainz Identifier (MBID) of the first area to be "20619e36-fca8-4499-bcc8-be01a3ea3e41", as given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            'Leipzig',
            (string) $area->getName(),
            'Expected the first areas name to be "Leipzig", as given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            'Leipzig',
            (string) $area->getSortName(),
            'Expected the first areas sort name to be "Leipzig", as given in Fixtures/Search/Area.json.'
        );

        /**
         * Validating the alias list of the first search result
         *
         * @var Alias $alias The first alias of the list
         */
        $alias = $area->getAliases()[0];

        $this->assertSame(
            AliasType::AREA_NAME,
            (string) $alias->getAliasType(),
            'Expected the first alias to be an area name, as given in Fixtures/Search/Area.json.'
        );

        $this->assertEmpty(
            (string) $alias->getBeginDate(),
            'Expected the first alias\' beginning date to be unset, as not given in Fixtures/Search/Area.json.'
        );

        $this->assertEmpty(
            (string) $alias->getEndDate(),
            'Expected the first alias\s ending date to be unset, as not given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            'ja',
            (string) $alias->getLocaleCode(),
            'Expected the first alias\' locale code to be "ja", as given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            'ライプツィヒ',
            (string) $alias->getName(),
            'Expected the first alias\' name to be "ライプツィヒ", as given in Fixtures/Search/Area.json.'
        );

        $this->assertTrue(
            $alias->getPrimaryName()->isPrimaryName(),
            'Expected the first alias to be a primary name, as given in Fixtures/Search/Area.json.'
        );

        $this->assertSame(
            'ライプツィヒ',
            (string) $alias->getSortName(),
            'Expected the first alias\' sort name to be "ライプツィヒ", as given in Fixtures/Search/Area.json.'
        );
    }

    /**
     * Setting up the mock object of the abstract HTTP adapter by expecting an API call and defining a fixture as result.
     *
     * @param string $path       An expected path
     * @param array  $parameters A list of expected parameters
     * @param string $fixture    A fixture placed in Fixtures/Search
     *
     * @return void
     */
    private function expectApiCall(string $path, array $parameters, string $fixture): void
    {
        $this->httpAdapter->expects($this->once())
            ->method('call')
            ->with(
                $path,
                $this->musicBrainz->config(),
                $parameters
            )
            ->willReturn(
                json_decode(file_get_contents(__DIR__ . '/../Fixtures/Search/' . $fixture), true)
            );
    }
}
