<?php

/**
 * \AppserverIo\Psr\Servlet\ServletConfigInterface
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
 * Interface for the servlet configuration.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
interface ServletConfigInterface
{

    /**
     * Returns the servlets name from the web.xml configuration file.
     *
     * @return string The servlet name
     */
    public function getServletName();

    /**
     * Returns the servlet context instance.
     *
     * @return \AppserverIo\Psr\Servlet\ServletContextInterface The context instance
     */
    public function getServletContext();

    /**
     * Returns the init parameter with the passed name.
     *
     * @param string $name Name of the init parameter to return
     *
     * @return null|string
     */
    public function getInitParameter($name);

    /**
     * Returns the webapp base path.
     *
     * @return string The webapp base path
     */
    public function getWebappPath();
}
