<?php
namespace GeorgRinger\NewsEventfields\Domain\Model;

/***
 *
 * This file is part of the "Additional fields for news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Georg Ringer, ringer.it
 *
 ***/

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News
{
    /**
     * eventTitle
     *
     * @var string
     * @validate NotEmpty
     */
    protected $eventTitle = '';

    /**
     * eventType
     *
     * @var string
     * @validate NotEmpty
     */
    protected $eventType = '';

    /**
     * eventSpeaker
     *
     * @var string
     */
    protected $eventSpeaker = '';

    /**
     * eventLanguage
     *
     * @var string
     */
    protected $eventLanguage = '';

    /**
     * eventDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $eventDate = null;

    /**
     * eventTime
     *
     * @var string
     */
    protected $eventTime = '';

    /**
     * eventOpeningHours
     *
     * @var string
     */
    protected $eventOpeningHours = '';

    /**
     * eventEnd
     *
     * @var string
     */
    protected $eventEnd = '';

    /**
     * feeFree
     *
     * @var bool
     */
    protected $feeFree = false;

    /**
     * fee
     *
     * @var string
     */
    protected $fee = '';

    /**
     * eventCurrency
     *
     * @var string
     */
    protected $eventCurrency = '';

    /**
     * location
     *
     * @var string
     */
    protected $location = '';

    /**
     * locationStreet
     *
     * @var string
     */
    protected $locationStreet = '';

    /**
     * locationCity
     *
     * @var string
     */
    protected $locationCity = '';

    /**
     * locationCountry
     *
     * @var string
     */
    protected $locationCountry = '';

    /**
     * locationWheelchairAccessible
     *
     * @var bool
     */
    protected $locationWheelchairAccessible = false;

    /**
     * organizer
     *
     * @var string
     */
    protected $organizer = '';

    /**
     * organizerWww
     *
     * @var string
     */
    protected $organizerWww = '';

    /**
     * organizerEmail
     *
     * @var string
     */
    protected $organizerEmail = '';

    /**
     * registrationUntil
     *
     * @var string
     */
    protected $registrationUntil = '';

    /**
     * notes
     *
     * @var string
     */
    protected $notes = '';

    /**
     * subheader
     *
     * @var string
     */
    protected $subheader = '';

    /**
     * frontendUser
     *
     * @var int
     */
    protected $frontendUser = 0;

    /**
     * Returns the eventTitle
     *
     * @return string $eventTitle
     */
    public function getEventTitle()
    {
        return $this->eventTitle;
    }

    /**
     * Sets the eventTitle
     *
     * @param string $eventTitle
     * @return void
     */
    public function setEventTitle($eventTitle)
    {
        $this->eventTitle = $eventTitle;
    }

    /**
     * Returns the eventType
     *
     * @return string $eventType
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets the eventType
     *
     * @param string $eventType
     * @return void
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * Returns the eventSpeaker
     *
     * @return string $eventSpeaker
     */
    public function getEventSpeaker()
    {
        return $this->eventSpeaker;
    }

    /**
     * Sets the eventSpeaker
     *
     * @param string $eventSpeaker
     * @return void
     */
    public function setEventSpeaker($eventSpeaker)
    {
        $this->eventSpeaker = $eventSpeaker;
    }

    /**
     * Returns the eventLanguage
     *
     * @return string $eventLanguage
     */
    public function getEventLanguage()
    {
        return $this->eventLanguage;
    }

    /**
     * Sets the eventLanguage
     *
     * @param string $eventLanguage
     * @return void
     */
    public function setEventLanguage($eventLanguage)
    {
        $this->eventLanguage = $eventLanguage;
    }

    /**
     * Returns the eventDate
     *
     * @return \DateTime $eventDate
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Sets the eventDate
     *
     * @param \DateTime $eventDate
     * @return void
     */
    public function setEventDate(\DateTime $eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * Returns the eventTime
     *
     * @return string $eventTime
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Sets the eventTime
     *
     * @param string $eventTime
     * @return void
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;
    }

    /**
     * Returns the eventOpeningHours
     *
     * @return string $eventOpeningHours
     */
    public function getEventOpeningHours()
    {
        return $this->eventOpeningHours;
    }

    /**
     * Sets the eventOpeningHours
     *
     * @param string $eventOpeningHours
     * @return void
     */
    public function setEventOpeningHours($eventOpeningHours)
    {
        $this->eventOpeningHours = $eventOpeningHours;
    }

    /**
     * Returns the eventEnd
     *
     * @return string $eventEnd
     */
    public function getEventEnd()
    {
        return $this->eventEnd;
    }

    /**
     * Sets the eventEnd
     *
     * @param string $eventEnd
     * @return void
     */
    public function setEventEnd($eventEnd)
    {
        $this->eventEnd = $eventEnd;
    }

    /**
     * Returns the feeFree
     *
     * @return bool $feeFree
     */
    public function getFeeFree()
    {
        return $this->feeFree;
    }

    /**
     * Sets the feeFree
     *
     * @param bool $feeFree
     * @return void
     */
    public function setFeeFree($feeFree)
    {
        $this->feeFree = $feeFree;
    }

    /**
     * Returns the boolean state of feeFree
     *
     * @return bool
     */
    public function isFeeFree()
    {
        return $this->feeFree;
    }

    /**
     * Returns the fee
     *
     * @return string $fee
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets the fee
     *
     * @param string $fee
     * @return void
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    }

    /**
     * Returns the eventCurrency
     *
     * @return string $eventCurrency
     */
    public function getEventCurrency()
    {
        return $this->eventCurrency;
    }

    /**
     * Sets the eventCurrency
     *
     * @param string $eventCurrency
     * @return void
     */
    public function setEventCurrency($eventCurrency)
    {
        $this->eventCurrency = $eventCurrency;
    }

    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Returns the locationStreet
     *
     * @return string $locationStreet
     */
    public function getLocationStreet()
    {
        return $this->locationStreet;
    }

    /**
     * Sets the locationStreet
     *
     * @param string $locationStreet
     * @return void
     */
    public function setLocationStreet($locationStreet)
    {
        $this->locationStreet = $locationStreet;
    }

    /**
     * Returns the locationCity
     *
     * @return string $locationCity
     */
    public function getLocationCity()
    {
        return $this->locationCity;
    }

    /**
     * Sets the locationCity
     *
     * @param string $locationCity
     * @return void
     */
    public function setLocationCity($locationCity)
    {
        $this->locationCity = $locationCity;
    }

    /**
     * Returns the locationCountry
     *
     * @return string $locationCountry
     */
    public function getLocationCountry()
    {
        return $this->locationCountry;
    }

    /**
     * Sets the locationCountry
     *
     * @param string $locationCountry
     * @return void
     */
    public function setLocationCountry($locationCountry)
    {
        $this->locationCountry = $locationCountry;
    }

    /**
     * Returns the locationWheelchairAccessible
     *
     * @return bool $locationWheelchairAccessible
     */
    public function getLocationWheelchairAccessible()
    {
        return $this->locationWheelchairAccessible;
    }

    /**
     * Sets the locationWheelchairAccessible
     *
     * @param bool $locationWheelchairAccessible
     * @return void
     */
    public function setLocationWheelchairAccessible($locationWheelchairAccessible)
    {
        $this->locationWheelchairAccessible = $locationWheelchairAccessible;
    }

    /**
     * Returns the boolean state of locationWheelchairAccessible
     *
     * @return bool
     */
    public function isLocationWheelchairAccessible()
    {
        return $this->locationWheelchairAccessible;
    }

    /**
     * Returns the organizer
     *
     * @return string $organizer
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * Sets the organizer
     *
     * @param string $organizer
     * @return void
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * Returns the organizerWww
     *
     * @return string $organizerWww
     */
    public function getOrganizerWww()
    {
        return $this->organizerWww;
    }

    /**
     * Sets the organizerWww
     *
     * @param string $organizerWww
     * @return void
     */
    public function setOrganizerWww($organizerWww)
    {
        $this->organizerWww = $organizerWww;
    }

    /**
     * Returns the organizerEmail
     *
     * @return string $organizerEmail
     */
    public function getOrganizerEmail()
    {
        return $this->organizerEmail;
    }

    /**
     * Sets the organizerEmail
     *
     * @param string $organizerEmail
     * @return void
     */
    public function setOrganizerEmail($organizerEmail)
    {
        $this->organizerEmail = $organizerEmail;
    }

    /**
     * Returns the registrationUntil
     *
     * @return string $registrationUntil
     */
    public function getRegistrationUntil()
    {
        return $this->registrationUntil;
    }

    /**
     * Sets the registrationUntil
     *
     * @param string $registrationUntil
     * @return void
     */
    public function setRegistrationUntil($registrationUntil)
    {
        $this->registrationUntil = $registrationUntil;
    }

    /**
     * Returns the notes
     *
     * @return string $notes
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets the notes
     *
     * @param string $notes
     * @return void
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Returns the subheader
     *
     * @return string $subheader
     */
    public function getSubheader()
    {
        return $this->subheader;
    }

    /**
     * Sets the subheader
     *
     * @param string $subheader
     * @return void
     */
    public function setSubheader($subheader)
    {
        $this->subheader = $subheader;
    }

    /**
     * Returns the frontendUser
     *
     * @return int $frontendUser
     */
    public function getFrontendUser()
    {
        return $this->frontendUser;
    }

    /**
     * Sets the frontendUser
     *
     * @param int $frontendUser
     * @return void
     */
    public function setFrontendUser($frontendUser)
    {
        $this->frontendUser = $frontendUser;
    }
}
