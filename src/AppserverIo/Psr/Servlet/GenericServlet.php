<?php

/**
 * AppserverIo\Psr\Servlet\GenericServlet
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
 * Abstract servlet implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
abstract class GenericServlet implements ServletInterface
{

    /**
     * The servlet configuration.
     *
     * @var \AppserverIo\Psr\Servlet\ServletConfigInterface
     */
    protected $servletConfig;

    /**
     * Information about the servlet, such as author, version, and copyright.
     *
     * @var string
     */
    protected $servletInfo = '';

    /**
     * Initializes the servlet with the passed configuration.
     *
     * @param \AppserverIo\Psr\Servlet\ServletConfigInterface $servletConfig The configuration to initialize the servlet with
     *
     * @return void
     */
    public function init(ServletConfigInterface $servletConfig)
    {
        $this->servletConfig = $servletConfig;
    }

    /**
     * Returns the servlet configuration.
     *
     * @return \AppserverIo\Psr\Servlet\ServletConfigInterface The servlet configuration
     */
    public function getServletConfig()
    {
        return $this->servletConfig;
    }

    /**
     * Returns information about the servlet, such as author, version, and copyright. By default, this method
     * returns an empty string. You have to override this method to have it return a meaningful value.
     *
     * @return string The servlet information
     */
    public function getServletInfo()
    {
        return $this->servletInfo;
    }

    /**
     * Returns the servlet context instance.
     *
     * @return \AppserverIo\Psr\Servlet\ServletContextInterface The servlet context instance
     */
    public function getServletContext()
    {
        return $this->getServletConfig()->getServletContext();
    }

    /**
     * Returns the servlets name from the web.xml configuration file.
     *
     * @return string The servlet name
     */
    public function getServletName()
    {
        return $this->getServletConfig()->getServletName();
    }

    /**
     * Returns the init parameter with the passed name.
     *
     * @param string $name Name of the init parameter to return
     *
     * @return null|string
     */
    public function getInitParameter($name)
    {
        return $this->getServletConfig()->getInitParameter($name);
    }
}
