<?php

/**
 * AppserverIo\Psr\Servlet\ServletContext
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
 * Interface that defines a servlet contenxt.
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
interface ServletContext
{

    /**
     * The unique identifier to be registered in the application context.
     *
     * @var string
     */
    const IDENTIFIER = 'ServletContext';

    /**
     * Return's all servlets
     *
     * @return array The servlets collection
     */
    public function getServlets();

    /**
     * Returns the servlet mappings found in the
     * configuration file.
     *
     * @return array The servlet mappings
     */
    public function getServletMappings();

    /**
     * Returns the servlet with the passed name.
     *
     * @param string $key The name of the servlet to return
     *
     * @return \AppserverIo\Psr\Servlet\Servlet The servlet instance
     */
    public function getServlet($key);

    /**
     * Returns the servlet for the passed URL mapping.
     *
     * @param string $urlMapping The URL mapping to return the servlet for
     *
     * @return \AppserverIo\Psr\Servlet\Servlet The servlet instance
     */
    public function getServletByMapping($urlMapping);

    /**
     * Returns the webapps security context configurations.
     *
     * @return array The security context configurations
     */
    public function getSecuredUrlConfigs();

    /**
     * Returns the init parameter with the passed name.
     *
     * @param string $name Name of the init parameter to return
     *
     * @return null|string
     */
    public function getInitParameter($name);

    /**
     * Returns the session parameter with the passed name.
     *
     * @param string $name Name of the session parameter to return
     *
     * @return null|string
     */
    public function getSessionParameter($name);

    /**
     * Returns TRUE if we've at least one session parameter configured, else FALSE.
     *
     * @return boolean TRUE if we've at least one session parametr configured, else FALSE
     */
    public function hasSessionParameters();

    /**
     * Returns the webapp base path.
     *
     * @return string The webapp base path
     */
    public function getWebappPath();
}
