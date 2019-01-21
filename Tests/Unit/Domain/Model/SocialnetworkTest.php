<?php
namespace YJSLT\PortfolioYjslt\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Léo-Paul Dubourg 
 * @author Yoann Chevessier 
 * @author Tom Quemener 
 * @author Sebastien Leduc 
 * @author Jean Magné 
 */
class SocialnetworkTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \YJSLT\PortfolioYjslt\Domain\Model\Socialnetwork();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForIntSetsName()
    {
        $this->subject->setName(12);

        self::assertAttributeEquals(
            12,
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIdentityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIdentity()
        );
    }

    /**
     * @test
     */
    public function setIdentityForStringSetsIdentity()
    {
        $this->subject->setIdentity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'identity',
            $this->subject
        );
    }
}
