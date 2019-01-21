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
 * Formation
 */
class Education extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Domaine
     *
     *
     * @var int
     * @validate NotEmpty
     */
    protected $domaine = 0;

    /**
     * Date Debut
     *
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateStart = null;

    /**
     * Date Fin
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateEnd = null;

    /**
     * Diplome
     *
     * @var int
     * @validate NotEmpty
     */
    protected $degree = 0;

    /**
     * Lieu
     *
     * @var string
     * @validate NotEmpty
     */
    protected $place = '';

    /**
     * Intitulé
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * compétences
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Skill>
     */
    protected $skills = null;

    /**
     * Returns the domaine
     *
     * @return int $domaine
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Sets the domaine
     *
     * @param int $domaine
     * @return void
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }

    /**
     * Returns the dateStart
     *
     * @return \DateTime $dateStart
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Sets the dateStart
     *
     * @param \DateTime $dateStart
     * @return void
     */
    public function setDateStart(\DateTime $dateStart)
    {
        $this->dateStart = $dateStart;
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
     * Returns the degree
     *
     * @return int $degree
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets the degree
     *
     * @param int $degree
     * @return void
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    /**
     * Returns the place
     *
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     *
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
