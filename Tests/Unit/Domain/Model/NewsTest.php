<?php
namespace GeorgRinger\NewsEventfields\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Georg Ringer 
 */
class NewsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \GeorgRinger\NewsEventfields\Domain\Model\News
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new \GeorgRinger\NewsEventfields\Domain\Model\News();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getEventTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventTitle()
        );

    }

    /**
     * @test
     */
    public function setEventTitleForStringSetsEventTitle()
    {
        $this->subject->setEventTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventTitle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventType()
        );

    }

    /**
     * @test
     */
    public function setEventTypeForStringSetsEventType()
    {
        $this->subject->setEventType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventType',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventSpeakerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventSpeaker()
        );

    }

    /**
     * @test
     */
    public function setEventSpeakerForStringSetsEventSpeaker()
    {
        $this->subject->setEventSpeaker('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventSpeaker',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventLanguageReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventLanguage()
        );

    }

    /**
     * @test
     */
    public function setEventLanguageForStringSetsEventLanguage()
    {
        $this->subject->setEventLanguage('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventLanguage',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEventDate()
        );

    }

    /**
     * @test
     */
    public function setEventDateForDateTimeSetsEventDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEventDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'eventDate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventTimeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventTime()
        );

    }

    /**
     * @test
     */
    public function setEventTimeForStringSetsEventTime()
    {
        $this->subject->setEventTime('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventTime',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventOpeningHoursReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventOpeningHours()
        );

    }

    /**
     * @test
     */
    public function setEventOpeningHoursForStringSetsEventOpeningHours()
    {
        $this->subject->setEventOpeningHours('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventOpeningHours',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventEndReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventEnd()
        );

    }

    /**
     * @test
     */
    public function setEventEndForStringSetsEventEnd()
    {
        $this->subject->setEventEnd('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventEnd',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFeeFreeReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getFeeFree()
        );

    }

    /**
     * @test
     */
    public function setFeeFreeForBoolSetsFeeFree()
    {
        $this->subject->setFeeFree(true);

        self::assertAttributeEquals(
            true,
            'feeFree',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFeeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFee()
        );

    }

    /**
     * @test
     */
    public function setFeeForStringSetsFee()
    {
        $this->subject->setFee('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fee',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventCurrencyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEventCurrency()
        );

    }

    /**
     * @test
     */
    public function setEventCurrencyForStringSetsEventCurrency()
    {
        $this->subject->setEventCurrency('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eventCurrency',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLocationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocation()
        );

    }

    /**
     * @test
     */
    public function setLocationForStringSetsLocation()
    {
        $this->subject->setLocation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'location',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLocationStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocationStreet()
        );

    }

    /**
     * @test
     */
    public function setLocationStreetForStringSetsLocationStreet()
    {
        $this->subject->setLocationStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'locationStreet',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLocationCityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocationCity()
        );

    }

    /**
     * @test
     */
    public function setLocationCityForStringSetsLocationCity()
    {
        $this->subject->setLocationCity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'locationCity',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLocationCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocationCountry()
        );

    }

    /**
     * @test
     */
    public function setLocationCountryForStringSetsLocationCountry()
    {
        $this->subject->setLocationCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'locationCountry',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLocationWheelchairAccessibleReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getLocationWheelchairAccessible()
        );

    }

    /**
     * @test
     */
    public function setLocationWheelchairAccessibleForBoolSetsLocationWheelchairAccessible()
    {
        $this->subject->setLocationWheelchairAccessible(true);

        self::assertAttributeEquals(
            true,
            'locationWheelchairAccessible',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getOrganizerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrganizer()
        );

    }

    /**
     * @test
     */
    public function setOrganizerForStringSetsOrganizer()
    {
        $this->subject->setOrganizer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'organizer',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getOrganizerWwwReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrganizerWww()
        );

    }

    /**
     * @test
     */
    public function setOrganizerWwwForStringSetsOrganizerWww()
    {
        $this->subject->setOrganizerWww('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'organizerWww',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getOrganizerEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrganizerEmail()
        );

    }

    /**
     * @test
     */
    public function setOrganizerEmailForStringSetsOrganizerEmail()
    {
        $this->subject->setOrganizerEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'organizerEmail',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getRegistrationUntilReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRegistrationUntil()
        );

    }

    /**
     * @test
     */
    public function setRegistrationUntilForStringSetsRegistrationUntil()
    {
        $this->subject->setRegistrationUntil('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'registrationUntil',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getNotesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNotes()
        );

    }

    /**
     * @test
     */
    public function setNotesForStringSetsNotes()
    {
        $this->subject->setNotes('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'notes',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSubheaderReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubheader()
        );

    }

    /**
     * @test
     */
    public function setSubheaderForStringSetsSubheader()
    {
        $this->subject->setSubheader('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subheader',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFrontendUserReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setFrontendUserForIntSetsFrontendUser()
    {
    }
}
