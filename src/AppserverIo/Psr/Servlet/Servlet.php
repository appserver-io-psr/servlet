<?php

/**
 * AppserverIo\Psr\Servlet\Servlet
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Servlet
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/servlet
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Psr\Servlet;

/**
 * Interface for all servlets.
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Servlet
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/servlet
 * @link       http://www.appserver.io
 */
interface Servlet
{

    /**
     * Initializes the servlet with the passed configuration.
     *
     * @param \AppserverIo\Psr\Servlet\ServletConfig $servletConfig The configuration to initialize the servlet with
     *
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the configuration has errors
     * @return void
     */
    public function init(ServletConfig $servletConfig);

    /**
     * Return's the servlet's configuration.
     *
     * @return \AppserverIo\Psr\Servlet\ServletConfig The servlet's configuration
     */
    public function getServletConfig();

    /**
     * Returns the servlet context instance
     *
     * @return \AppserverIo\Psr\Servlet\ServletContext The servlet context instance
     */
    public function getServletContext();

    /**
     * Delegates to http method specific functions like doPost() for POST e.g.
     *
     * @param \AppserverIo\Psr\Servlet\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\ServletResponse $servletResponse The response sent back to the client
     *
     * @return void
     */
    public function service(ServletRequest $servletRequest, ServletResponse $servletResponse);

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
