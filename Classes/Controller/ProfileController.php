<?php
namespace YJSLT\PortfolioYjslt\Controller;

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
 * ProfileController
 */
class ProfileController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * profileRepository
     *
     * @var \YJSLT\PortfolioYjslt\Domain\Repository\ProfileRepository
     * @inject
     */
    protected $profileRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $profiles = $this->profileRepository->findAll();
        $this->view->assign('profiles', $profiles);
    }

    /**
     * action show
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Profile $profile
     * @return void
     */
    public function showAction(\YJSLT\PortfolioYjslt\Domain\Model\Profile $profile)
    {
        $this->view->assign('profile', $profile);
    }
}
