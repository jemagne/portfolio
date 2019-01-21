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
 * ProjectController
 */
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * projectRepository
     *
     * @var \YJSLT\PortfolioYjslt\Domain\Repository\ProjectRepository
     * @inject
     */
    protected $projectRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $projects = $this->projectRepository->findAll();
        $this->view->assign('projects', $projects);
    }

    /**
     * action show
     *
     * @param \YJSLT\PortfolioYjslt\Domain\Model\Project $project
     * @return void
     */
    public function showAction(\YJSLT\PortfolioYjslt\Domain\Model\Project $project)
    {
        $this->view->assign('project', $project);
    }

    /**
     * action highlight
     *
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action skills
     *
     * @return void
     */
    public function skillsAction()
    {

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
