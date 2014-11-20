<?php

/**
 * AppserverIo\Psr\Servlet\Http\HttpServletRequestWrapper
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

namespace AppserverIo\Psr\Servlet\Http;

use AppserverIo\Psr\Servlet\ServletRequestWrapper;

/**
 * A servlet request implementation.
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
class HttpServletRequestWrapper extends ServletRequestWrapper implements HttpServletRequest
{

    /**
     * Injects the passed request instance into this servlet request.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequest $request The request instance used for initialization
     *
     * @return void
     */
    public function injectHttpRequest(HttpServletRequest $request)
    {
        $this->injectRequest($request);
    }

    /**
     * Returns the application context name (application name prefixed with a slash) for the actual request.
     *
     * @return string The application context name
     */
    public function getContextPath()
    {
        return $this->getRequest()->getContextPath();
    }

    /**
     * Returns the path to the servlet used to handle this request.
     *
     * @return string The relative path to the servlet
     */
    public function getServletPath()
    {
        return $this->getRequest()->getServletPath();
    }

    /**
     * Returns the session for this request.
     *
     * @param boolean $create TRUE to create a new session, else FALSE
     *
     * @return \AppserverIo\Psr\Servlet\Http\HttpSession The session instance
     */
    public function getSession($create = false)
    {
        return $this->getRequest()->getSession($create);
    }

    /**
     * Returns the absolute path info started from the context path.
     *
     * @return string the absolute path info
     */
    public function getPathInfo()
    {
        return $this->getRequest()->getPathInfo();
    }

    /**
     * Returns the server name.
     *
     * @return string The server name
     */
    public function getServerName()
    {
        return $this->getRequest()->getServerName();
    }

    /**
     * Returns query string of the actual request.
     *
     * @return string|null The query string of the actual request
     */
    public function getQueryString()
    {
        return $this->getRequest()->getQueryString();
    }

    /**
     * Returns header info by given key
     *
     * @param string $key The header key to get
     *
     * @return string|null
     */
    public function getHeader($key)
    {
        return $this->getRequest()->getHeader($key);
    }

    /**
     * Returns headers data.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->getRequest()->getHeaders();
    }

    /**
     * Adds a header information got from connection.
     *
     * @param string $name  The header name
     * @param string $value The headers value
     *
     * @return void
     */
    public function addHeader($name, $value)
    {
        $this->getRequest()->addHeader($name, $value);
    }

    /**
     * Checks if header exists by given name.
     *
     * @param string $name The header name to check
     *
     * @return boolean
    */
    public function hasHeader($name)
    {
        return $this->getRequest()->hasHeader($name);
    }

    /**
     * Set headers data.
     *
     * @param array $headers The headers array to set
     *
     * @return void
     */
    public function setHeaders(array $headers)
    {
        $this->getRequest()->setHeaders($headers);
    }

    /**
     * Returns request method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->getRequest()->getMethod();
    }

    /**
     * Sets the method to be performed on the resource identified by the
     * Request-URI.
     *
     * While HTTP method names are typically all uppercase characters, HTTP
     * method names are case-sensitive and thus implementations SHOULD NOT
     * modify the given string.
     *
     * @param string $method Case-insensitive method
     *
     * @return void
     */
    public function setMethod($method)
    {
        return $this->getRequest()->setMethod($method);
    }

    /**
     * Returns request URI.
     *
     * @return string
     */
    public function getUri()
    {
        return $this->getRequest()->getUri();
    }

    /**
     * Sets the URI.
     *
     * @param string $uri The uri
     *
     * @return void
     */
    public function setUri($uri)
    {
        $this->getRequest()->setUri($uri);
    }

    /**
     * Returns true if the request has a cookie header with the passed
     * name, else false.
     *
     * @param string $cookieName Name of the cookie header to be checked
     *
     * @return boolean true if the request has the cookie, else false
     */
    public function hasCookie($cookieName)
    {
        return $this->getRequest()->hasCookie($cookieName);
    }

    /**
     * Returns the value of the cookie with the passed name.
     *
     * @param string $cookieName The name of the cookie to return
     *
     * @return \AppserverIo\Psr\HttpMessage\CookieInterface The cookie instance
     */
    public function getCookie($cookieName)
    {
        return $this->getRequest()->getCookie($cookieName);
    }
}
