<?php
namespace YJSLT\PortfolioYjslt\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Léo-Paul Dubourg 
 * @author Yoann Chevessier 
 * @author Tom Quemener 
 * @author Sebastien Leduc 
 * @author Jean Magné 
 */
class ProfilControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \YJSLT\PortfolioYjslt\Controller\ProfilController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\YJSLT\PortfolioYjslt\Controller\ProfilController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProfilsFromRepositoryAndAssignsThemToView()
    {

        $allProfils = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $profilRepository = $this->getMockBuilder(\YJSLT\PortfolioYjslt\Domain\Repository\ProfilRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $profilRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProfils));
        $this->inject($this->subject, 'profilRepository', $profilRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('profils', $allProfils);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProfilToView()
    {
        $profil = new \YJSLT\PortfolioYjslt\Domain\Model\Profil();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('profil', $profil);

        $this->subject->showAction($profil);
    }
}
