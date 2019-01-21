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
class EducationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \YJSLT\PortfolioYjslt\Controller\EducationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\YJSLT\PortfolioYjslt\Controller\EducationController::class)
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
    public function listActionFetchesAllEducationsFromRepositoryAndAssignsThemToView()
    {

        $allEducations = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $educationRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $educationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allEducations));
        $this->inject($this->subject, 'educationRepository', $educationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('educations', $allEducations);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenEducationToView()
    {
        $education = new \YJSLT\PortfolioYjslt\Domain\Model\Education();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('education', $education);

        $this->subject->showAction($education);
    }
}
