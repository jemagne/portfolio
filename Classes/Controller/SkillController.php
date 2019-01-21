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
 * SkillController
 */
class SkillController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action show
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Skill $skill
     * @return void
     */
    public function showAction(\YJSLT\PortfolioYjslt\Domain\Model\Skill $skill)
    {
        $this->view->assign('skill', $skill);
    }
}
