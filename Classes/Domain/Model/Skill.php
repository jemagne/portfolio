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
 * Skill
 */
class Skill extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * titre
     *
     * @var string
     * @validate NotEmpty
     */
    protected $tile = '';

    /**
     * Description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * catégories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Category>
     */
    protected $categories = null;

    /**
     * Returns the tile
     *
     * @return string $tile
     */
    public function getTile()
    {
        return $this->tile;
    }

    /**
     * Sets the tile
     *
     * @param string $tile
     * @return void
     */
    public function setTile($tile)
    {
        $this->tile = $tile;
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
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Category
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\YJSLT\PortfolioYjslt\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\YJSLT\PortfolioYjslt\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\YJSLT\PortfolioYjslt\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }
}
