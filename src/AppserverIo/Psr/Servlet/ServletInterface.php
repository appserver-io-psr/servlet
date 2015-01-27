<?php

/**
 * AppserverIo\Psr\Servlet\ServletInterface
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
 * Interface for all servlets.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
interface ServletInterface
{

    /**
     * Initializes the servlet with the passed configuration.
     *
     * @param \AppserverIo\Psr\Servlet\ServletConfigInterface $servletConfig The configuration to initialize the servlet with
     *
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the configuration has errors
     * @return void
     */
    public function init(ServletConfigInterface $servletConfig);

    /**
     * Returns the servlet's configuration.
     *
     * @return \AppserverIo\Psr\Servlet\ServletConfigInterface The servlet's configuration
     */
    public function getServletConfig();

    /**
     * Returns the servlet context instance
     *
     * @return \AppserverIo\Psr\Servlet\ServletContextInterface The servlet context instance
     */
    public function getServletContext();

    /**
     * Delegates to http method specific functions like doPost() for POST e.g.
     *
     * @param \AppserverIo\Psr\Servlet\ServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\ServletResponseInterface $servletResponse The response sent back to the client
     *
     * @return void
     */
    public function service(ServletRequestInterface $servletRequest, ServletResponseInterface $servletResponse);

    /**
     * Returns an array with the servlet information.
     *
     * @return array The server information
     */
    public function getServletInfo();

    /**
     * Destroys the object on shutdown.
     *
     * @return void
     */
    public function destroy();
}
