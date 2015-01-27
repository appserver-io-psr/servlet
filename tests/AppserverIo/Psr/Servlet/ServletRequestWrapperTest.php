<?php

/**
 * AppserverIo\Psr\Servlet\ServletRequestWrapperTest
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

namespace AppserverIo\Psr\Servlet;

/**
 * Test for servlet request wrapper implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
class ServletRequestWrapperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the request version is returned correctly.
     *
     * @return void
     */
    public function testGetVersion()
    {

        // create a stub for the ServletRequest interface
        $stub = $this->getMock('\AppserverIo\Psr\Servlet\ServletRequestInterface');

        // Configure the stub.
        $stub->expects($this->any())
             ->method('getVersion')
             ->will($this->returnValue($version = 'HTTP/1.1'));

        // create a new wrapper instance
        $wrapper = new ServletRequestWrapper();
        $wrapper->injectRequest($stub);

        // check if the version has been returned
        $this->assertSame($version, $wrapper->getVersion());
    }
}
