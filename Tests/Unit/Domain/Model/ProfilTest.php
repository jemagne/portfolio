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
class ProfilTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \YJSLT\PortfolioYjslt\Domain\Model\Profil
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \YJSLT\PortfolioYjslt\Domain\Model\Profil();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBirthDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBirthDate()
        );
    }

    /**
     * @test
     */
    public function setBirthDateForDateTimeSetsBirthDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBirthDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'birthDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDrivingLicenceReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getDrivingLicence()
        );
    }

    /**
     * @test
     */
    public function setDrivingLicenceForBoolSetsDrivingLicence()
    {
        $this->subject->setDrivingLicence(true);

        self::assertAttributeEquals(
            true,
            'drivingLicence',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTel()
        );
    }

    /**
     * @test
     */
    public function setTelForStringSetsTel()
    {
        $this->subject->setTel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMail()
        );
    }

    /**
     * @test
     */
    public function setMailForStringSetsMail()
    {
        $this->subject->setMail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhoto()
        );
    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhoto($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProjectsReturnsInitialValueForProject()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProjects()
        );
    }

    /**
     * @test
     */
    public function setProjectsForObjectStorageContainingProjectSetsProjects()
    {
        $project = new \YJSLT\PortfolioYjslt\Domain\Model\Project();
        $objectStorageHoldingExactlyOneProjects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProjects->attach($project);
        $this->subject->setProjects($objectStorageHoldingExactlyOneProjects);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneProjects,
            'projects',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addProjectToObjectStorageHoldingProjects()
    {
        $project = new \YJSLT\PortfolioYjslt\Domain\Model\Project();
        $projectsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $projectsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($project));
        $this->inject($this->subject, 'projects', $projectsObjectStorageMock);

        $this->subject->addProject($project);
    }

    /**
     * @test
     */
    public function removeProjectFromObjectStorageHoldingProjects()
    {
        $project = new \YJSLT\PortfolioYjslt\Domain\Model\Project();
        $projectsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $projectsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($project));
        $this->inject($this->subject, 'projects', $projectsObjectStorageMock);

        $this->subject->removeProject($project);
    }

    /**
     * @test
     */
    public function getJobsReturnsInitialValueForJob()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getJobs()
        );
    }

    /**
     * @test
     */
    public function setJobsForObjectStorageContainingJobSetsJobs()
    {
        $job = new \YJSLT\PortfolioYjslt\Domain\Model\Job();
        $objectStorageHoldingExactlyOneJobs = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneJobs->attach($job);
        $this->subject->setJobs($objectStorageHoldingExactlyOneJobs);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneJobs,
            'jobs',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addJobToObjectStorageHoldingJobs()
    {
        $job = new \YJSLT\PortfolioYjslt\Domain\Model\Job();
        $jobsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $jobsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($job));
        $this->inject($this->subject, 'jobs', $jobsObjectStorageMock);

        $this->subject->addJob($job);
    }

    /**
     * @test
     */
    public function removeJobFromObjectStorageHoldingJobs()
    {
        $job = new \YJSLT\PortfolioYjslt\Domain\Model\Job();
        $jobsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $jobsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($job));
        $this->inject($this->subject, 'jobs', $jobsObjectStorageMock);

        $this->subject->removeJob($job);
    }

    /**
     * @test
     */
    public function getSocialReturnsInitialValueForSocialnetwork()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSocial()
        );
    }

    /**
     * @test
     */
    public function setSocialForObjectStorageContainingSocialnetworkSetsSocial()
    {
        $social = new \YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork();
        $objectStorageHoldingExactlyOneSocial = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSocial->attach($social);
        $this->subject->setSocial($objectStorageHoldingExactlyOneSocial);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSocial,
            'social',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSocialToObjectStorageHoldingSocial()
    {
        $social = new \YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork();
        $socialObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($social));
        $this->inject($this->subject, 'social', $socialObjectStorageMock);

        $this->subject->addSocial($social);
    }

    /**
     * @test
     */
    public function removeSocialFromObjectStorageHoldingSocial()
    {
        $social = new \YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork();
        $socialObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($social));
        $this->inject($this->subject, 'social', $socialObjectStorageMock);

        $this->subject->removeSocial($social);
    }

    /**
     * @test
     */
    public function getEducationsReturnsInitialValueForEducation()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEducations()
        );
    }

    /**
     * @test
     */
    public function setEducationsForObjectStorageContainingEducationSetsEducations()
    {
        $education = new \YJSLT\PortfolioYjslt\Domain\Model\Education();
        $objectStorageHoldingExactlyOneEducations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEducations->attach($education);
        $this->subject->setEducations($objectStorageHoldingExactlyOneEducations);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEducations,
            'educations',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addEducationToObjectStorageHoldingEducations()
    {
        $education = new \YJSLT\PortfolioYjslt\Domain\Model\Education();
        $educationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($education));
        $this->inject($this->subject, 'educations', $educationsObjectStorageMock);

        $this->subject->addEducation($education);
    }

    /**
     * @test
     */
    public function removeEducationFromObjectStorageHoldingEducations()
    {
        $education = new \YJSLT\PortfolioYjslt\Domain\Model\Education();
        $educationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($education));
        $this->inject($this->subject, 'educations', $educationsObjectStorageMock);

        $this->subject->removeEducation($education);
    }
}
