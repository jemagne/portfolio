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
 * ProfilController
 */
class ProfilController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * profilRepository
     *
     * @var \YJSLT\PortfolioYjslt\Domain\Repository\ProfilRepository
     * @inject
     */
    protected $profilRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $profils = $this->profilRepository->findAll();
        $this->view->assign('profils', $profils);
    }

    /**
     * action show
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Profil $profil
     * @return void
     */
    public function showAction(\YJSLT\PortfolioYjslt\Domain\Model\Profil $profil)
    {
        $this->view->assign('profil', $profil);
    }
}
