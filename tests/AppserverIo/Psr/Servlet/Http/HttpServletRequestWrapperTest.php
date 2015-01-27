<?php

/**
 * AppserverIo\Psr\Servlet\Http\HttpServletRequestWrapperTest
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
 * Test for Http servlet request wrapper implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
class HttpServletRequestWrapperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the query string is returned correctly.
     *
     * @return void
     */
    public function testGetQueryString()
    {

        // create a stub for the HttpServletRequest interface
        $stub = $this->getMock('\AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface');

        // configure the stub
        $stub->expects($this->any())
             ->method('getQueryString')
             ->will($this->returnValue($queryString = 'arg1=value1&arg2=value2'));

        // create a new wrapper instance
        $wrapper = new HttpServletRequestWrapper();
        $wrapper->injectHttpRequest($stub);

        // check if the query string has been returned
        $this->assertSame($queryString, $wrapper->getQueryString());
    }
}
