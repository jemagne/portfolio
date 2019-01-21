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
 * Socialnetwork
 */
class Socialnetwork extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var int
     * @validate NotEmpty
     */
    protected $name = 0;

    /**
     * Identifiant
     *
     * @var string
     * @validate NotEmpty
     */
    protected $identity = '';

    /**
     * Returns the name
     *
     * @return int $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param int $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the identity
     *
     * @return string $identity
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets the identity
     *
     * @param string $identity
     * @return void
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }
}
