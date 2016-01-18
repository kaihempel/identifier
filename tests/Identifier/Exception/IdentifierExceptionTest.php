<?php namespace Identifier\Exception;

use PHPUnit_Framework_TestCase;

/**
 * Basic exception test
 *
 * @package    Dbrouter
 * @subpackage tests
 * @author     Kai Hempel <dev@kuweh.de>
 * @copyright  2014 Kai Hempel <dev@kuweh.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       https://www.kuweh.de/
 * @since      Class available since Release 1.0.0
 */
class IdentifierExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testNewException() {

        $ex = new IdentifierException('Special exception');

        $this->assertInstanceOf('Identifier\Exception\IdentifierException', $ex);
        $this->assertEquals('Special exception', $ex->getMessage());
    }

    public function testMake() {

        $ex = IdentifierException::make();

        $this->assertInstanceOf('Identifier\Exception\IdentifierException', $ex);
        $this->assertEquals('Unknown exception', $ex->getMessage());
    }
}