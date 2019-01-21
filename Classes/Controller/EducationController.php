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
 * EducationController
 */
class EducationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $educations = $this->educationRepository->findAll();
        $this->view->assign('educations', $educations);
    }

    /**
     * action show
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Education $education
     * @return void
     */
    public function showAction(\YJSLT\PortfolioYjslt\Domain\Model\Education $education)
    {
        $this->view->assign('education', $education);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
