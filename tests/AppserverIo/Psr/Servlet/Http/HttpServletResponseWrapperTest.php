<?php

/**
 * AppserverIo\Psr\Servlet\Http\HttpServletResponseWrapperTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Servlet\Http;

/**
 * Test for Http servlet response wrapper implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
class HttpServletResponseWrapperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test that the accepted encodings are returned correctly.
     *
     * @return void
     */
    public function testGetCode()
    {

        // create a stub for the ServletResponse interface
        $stub = $this->getMock('\AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface');

        // Configure the stub.
        $stub->expects($this->any())
             ->method('getStatusCode')
             ->will($this->returnValue($code = 404));

        // create a new wrapper instance
        $wrapper = new HttpServletResponseWrapper();
        $wrapper->injectHttpResponse($stub);

        // check if the response code has been returned
        $this->assertSame($code, $wrapper->getStatusCode());
    }
}
