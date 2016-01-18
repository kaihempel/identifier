<?php namespace Identifier;

use PHPUnit_Framework_TestCase;

/**
 * Identifier test
 *
 * @package    Dbrouter
 * @subpackage tests
 * @author     Kai Hempel <dev@kuweh.de>
 * @copyright  2014 Kai Hempel <dev@kuweh.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       https://www.kuweh.de/
 * @since      Class available since Release 1.0.0
 */
class IdentifierTest extends PHPUnit_Framework_TestCase
{
    public function testNewIdentifier()
    {
        $id = new Identifier(1);

        $this->assertInstanceOf('Identifier\Identifier', $id);
        $this->assertEquals(1, $id->getId());
    }

    /**
     * @expectedException \Identifier\Exception\IdentifierException
     * @expectedExceptionMessage Unexpected ID value given!
     */
    public function testNewIdentifierException()
    {
        $id = new Identifier(NULL);
    }

    public function testEmptyIdentifier()
    {
        $id = new Identifier(0);

        $this->assertEquals(0, $id->getId());
        $this->assertTrue($id->isEmpty());
    }

    public function testComparison()
    {
        $id = new Identifier(1);

        $this->assertEquals(1, $id->getId());
        $this->assertTrue($id->is(1));

    }

    /**
     * @expectedException \Identifier\Exception\IdentifierException
     * @expectedExceptionMessage Only integer values allowed!
     */
    public function testComparisonExceptionString()
    {
        $id = new Identifier(1);
        $id->is('1');
    }

    /**
     * @expectedException \Identifier\Exception\IdentifierException
     * @expectedExceptionMessage Only integer values allowed!
     */
    public function testComparisonExceptionBoolean()
    {
        $id = new Identifier(1);
        $id->is(true);
    }

    public function testDirectComparison()
    {
        $id = new Identifier(5);

        $this->assertEquals(5, $id->getId());
        $this->assertTrue(('5' == $id));
        $this->assertFalse((5 === $id));
        $this->assertTrue((5 === $id->getId()));
    }

}
