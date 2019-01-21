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
 * Job
 */
class Job extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Poste
     *
     * @var string
     * @validate NotEmpty
     */
    protected $position = '';

    /**
     * Nom de l'entreprise
     *
     * @var string
     * @validate NotEmpty
     */
    protected $companyName = '';

    /**
     * Fiche de poste
     *
     * @var string
     * @validate NotEmpty
     */
    protected $positionCard = '';

    /**
     * Date d'embauche
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateHiring = null;

    /**
     * Date de fon
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateEnd = null;

    /**
     * Contrat
     *
     * @var int
     * @validate NotEmpty
     */
    protected $contract = 0;

    /**
     * Localisation
     *
     * @var string
     * @validate NotEmpty
     */
    protected $location = '';

    /**
     * Compétences
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Skill>
     * @lazy
     */
    protected $skills = null;

    /**
     * Returns the position
     *
     * @return string $position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the position
     *
     * @param string $position
     * @return void
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Returns the companyName
     *
     * @return string $companyName
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets the companyName
     *
     * @param string $companyName
     * @return void
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * Returns the positionCard
     *
     * @return string $positionCard
     */
    public function getPositionCard()
    {
        return $this->positionCard;
    }

    /**
     * Sets the positionCard
     *
     * @param string $positionCard
     * @return void
     */
    public function setPositionCard($positionCard)
    {
        $this->positionCard = $positionCard;
    }

    /**
     * Returns the dateHiring
     *
     * @return \DateTime $dateHiring
     */
    public function getDateHiring()
    {
        return $this->dateHiring;
    }

    /**
     * Sets the dateHiring
     *
     * @param \DateTime $dateHiring
     * @return void
     */
    public function setDateHiring(\DateTime $dateHiring)
    {
        $this->dateHiring = $dateHiring;
    }

    /**
     * Returns the dateEnd
     *
     * @return \DateTime $dateEnd
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Sets the dateEnd
     *
     * @param \DateTime $dateEnd
     * @return void
     */
    public function setDateEnd(\DateTime $dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * Returns the contract
     *
     * @return int $contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets the contract
     *
     * @param int $contract
     * @return void
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
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
        $this->skills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Skill
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Skill $skill
     * @return void
     */
    public function addSkill(\YJSLT\PortfolioYjslt\Domain\Model\Skill $skill)
    {
        $this->skills->attach($skill);
    }

    /**
     * Removes a Skill
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Skill $skillToRemove The Skill to be removed
     * @return void
     */
    public function removeSkill(\YJSLT\PortfolioYjslt\Domain\Model\Skill $skillToRemove)
    {
        $this->skills->detach($skillToRemove);
    }

    /**
     * Returns the skills
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Skill> $skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Sets the skills
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Skill> $skills
     * @return void
     */
    public function setSkills(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $skills)
    {
        $this->skills = $skills;
    }
}
