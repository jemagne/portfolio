<?php
namespace YJSLT\PortfolioYjslt\Domain\Model;

/***
 *
 * This file is part of the "PortfolioYJSLT" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Léo-Paul Dubourg
 *           Yoann Chevessier
 *           Tom Quemener
 *           Sebastien Leduc
 *           Jean Magné
 *
 ***/

/**
 * profile
 */
class Profil extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * lastName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $lastName = '';

    /**
     * firstName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $firstName = '';

    /**
     * birthDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $birthDate = null;

    /**
     * Moyen de transport individuel
     *
     * @var bool
     */
    protected $drivingLicence = false;

    /**
     * Téléphone
     *
     * @var string
     */
    protected $tel = '';

    /**
     * Courriel
     *
     * @var string
     */
    protected $mail = '';

    /**
     * Adresse
     *
     * @var string
     */
    protected $address = '';

    /**
     * Photo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $photo = null;

    /**
     * projets
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Project>
     * @cascade remove
     * @lazy
     */
    protected $projects = null;

    /**
     * emplois
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Job>
     * @cascade remove
     * @lazy
     */
    protected $jobs = null;

    /**
     * Réseaux social
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork>
     * @cascade remove
     * @lazy
     */
    protected $social = null;

    /**
     * Formations
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Education>
     * @lazy
     */
    protected $educations = null;

    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the birthDate
     *
     * @return \DateTime $birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets the birthDate
     *
     * @param \DateTime $birthDate
     * @return void
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns the drivingLicence
     *
     * @return bool $drivingLicence
     */
    public function getDrivingLicence()
    {
        return $this->drivingLicence;
    }

    /**
     * Sets the drivingLicence
     *
     * @param bool $drivingLicence
     * @return void
     */
    public function setDrivingLicence($drivingLicence)
    {
        $this->drivingLicence = $drivingLicence;
    }

    /**
     * Returns the boolean state of drivingLicence
     *
     * @return bool
     */
    public function isDrivingLicence()
    {
        return $this->drivingLicence;
    }

    /**
     * Returns the tel
     *
     * @return string $tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Sets the tel
     *
     * @param string $tel
     * @return void
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * Returns the mail
     *
     * @return string $mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the mail
     *
     * @param string $mail
     * @return void
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the photo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->projects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->jobs = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->social = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->educations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Project
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Project $project
     * @return void
     */
    public function addProject(\YJSLT\PortfolioYjslt\Domain\Model\Project $project)
    {
        $this->projects->attach($project);
    }

    /**
     * Removes a Project
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Project $projectToRemove The Project to be removed
     * @return void
     */
    public function removeProject(\YJSLT\PortfolioYjslt\Domain\Model\Project $projectToRemove)
    {
        $this->projects->detach($projectToRemove);
    }

    /**
     * Returns the projects
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Project> $projects
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Sets the projects
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Project> $projects
     * @return void
     */
    public function setProjects(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $projects)
    {
        $this->projects = $projects;
    }

    /**
     * Adds a Job
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Job $job
     * @return void
     */
    public function addJob(\YJSLT\PortfolioYjslt\Domain\Model\Job $job)
    {
        $this->jobs->attach($job);
    }

    /**
     * Removes a Job
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Job $jobToRemove The Job to be removed
     * @return void
     */
    public function removeJob(\YJSLT\PortfolioYjslt\Domain\Model\Job $jobToRemove)
    {
        $this->jobs->detach($jobToRemove);
    }

    /**
     * Returns the jobs
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Job> $jobs
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Sets the jobs
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Job> $jobs
     * @return void
     */
    public function setJobs(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $jobs)
    {
        $this->jobs = $jobs;
    }

    /**
     * Adds a Socialnetwork
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork $social
     * @return void
     */
    public function addSocial(\YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork $social)
    {
        $this->social->attach($social);
    }

    /**
     * Removes a Socialnetwork
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork $socialToRemove The Socialnetwork to be removed
     * @return void
     */
    public function removeSocial(\YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork $socialToRemove)
    {
        $this->social->detach($socialToRemove);
    }

    /**
     * Returns the social
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork> $social
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Sets the social
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork> $social
     * @return void
     */
    public function setSocial(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $social)
    {
        $this->social = $social;
    }

    /**
     * Adds a Education
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Education $education
     * @return void
     */
    public function addEducation(\YJSLT\PortfolioYjslt\Domain\Model\Education $education)
    {
        $this->educations->attach($education);
    }

    /**
     * Removes a Education
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Education $educationToRemove The Education to be removed
     * @return void
     */
    public function removeEducation(\YJSLT\PortfolioYjslt\Domain\Model\Education $educationToRemove)
    {
        $this->educations->detach($educationToRemove);
    }

    /**
     * Returns the educations
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Education> $educations
     */
    public function getEducations()
    {
        return $this->educations;
    }

    /**
     * Sets the educations
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Education> $educations
     * @return void
     */
    public function setEducations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $educations)
    {
        $this->educations = $educations;
    }
}
