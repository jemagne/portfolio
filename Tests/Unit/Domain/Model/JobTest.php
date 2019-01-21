<?php
namespace YJSLT\PortfolioYjslt\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Léo-Paul Dubourg 
 * @author Yoann Chevessier 
 * @author Tom Quemener 
 * @author Sebastien Leduc 
 * @author Jean Magné 
 */
class JobTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \YJSLT\PortfolioYjslt\Domain\Model\Job
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \YJSLT\PortfolioYjslt\Domain\Model\Job();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPositionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPosition()
        );
    }

    /**
     * @test
     */
    public function setPositionForStringSetsPosition()
    {
        $this->subject->setPosition('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'position',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCompanyNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCompanyName()
        );
    }

    /**
     * @test
     */
    public function setCompanyNameForStringSetsCompanyName()
    {
        $this->subject->setCompanyName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'companyName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPositionCardReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPositionCard()
        );
    }

    /**
     * @test
     */
    public function setPositionCardForStringSetsPositionCard()
    {
        $this->subject->setPositionCard('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'positionCard',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateHiringReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateHiring()
        );
    }

    /**
     * @test
     */
    public function setDateHiringForDateTimeSetsDateHiring()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateHiring($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateHiring',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateEndReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateEnd()
        );
    }

    /**
     * @test
     */
    public function setDateEndForDateTimeSetsDateEnd()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateEnd($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateEnd',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContractReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getContract()
        );
    }

    /**
     * @test
     */
    public function setContractForIntSetsContract()
    {
        $this->subject->setContract(12);

        self::assertAttributeEquals(
            12,
            'contract',
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
    public function getSkillsReturnsInitialValueForSkill()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSkills()
        );
    }

    /**
     * @test
     */
    public function setSkillsForObjectStorageContainingSkillSetsSkills()
    {
        $skill = new \YJSLT\PortfolioYjslt\Domain\Model\Skill();
        $objectStorageHoldingExactlyOneSkills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSkills->attach($skill);
        $this->subject->setSkills($objectStorageHoldingExactlyOneSkills);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSkills,
            'skills',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSkillToObjectStorageHoldingSkills()
    {
        $skill = new \YJSLT\PortfolioYjslt\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->addSkill($skill);
    }

    /**
     * @test
     */
    public function removeSkillFromObjectStorageHoldingSkills()
    {
        $skill = new \YJSLT\PortfolioYjslt\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->removeSkill($skill);
    }
}
