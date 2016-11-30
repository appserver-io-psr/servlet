<?php

/**
 * \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface
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

use AppserverIo\Psr\HttpMessage\PartInterface;
use AppserverIo\Psr\HttpMessage\CookieInterface;
use AppserverIo\Psr\HttpMessage\RequestInterface;
use AppserverIo\Psr\Servlet\ServletRequestInterface;

/**
 * The servlet request interface.
 *
 * Here are some examples of the expected results:
 *
 * http://127.0.0.1:8586/example/index/index.do
 *   getServerName():  127.0.0.1
 *   getContextPath(): /example
 *   getServletPath(): /index/index.do
 *   getPathInfo():
 *
 * http://example.local:8586/index/index.do
 *   getServerName():  example.local
 *   getContextPath(): /example
 *   getServletPath(): /index/index.do
 *   getPathInfo():
 *
 * http://example.local:8586/images.do/static/images/logo.png
 *   getServerName():  example.local
 *   getContextPath(): /example
 *   getServletPath(): /images.do
 *   getPathInfo():    /static/images/logo.png
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
interface HttpServletRequestInterface extends ServletRequestInterface, RequestInterface
{

    /**
     * Returns the base modifier which allows for base path generation within rewritten URL environments.
     *
     * @return string
     */
    public function getBaseModifier();

    /**
     * Returns the application context name (application name prefixed with a slash) for the actual request.
     *
     * @return string The application context name
     */
    public function getContextPath();

    /**
     * Returns the part of this request's URL from the protocol name up to the query string in the first line of the HTTP request.
     *
     * @return string
     */
    public function getRequestUri();

    /**
     * Returns the URL the client used to make the request.
     *
     * @return string
     */
    public function getRequestUrl();

    /**
     * Returns the path to the servlet used to handle this request.
     *
     * @return string The relative path to the servlet
     */
    public function getServletPath();

    /**
     * Returns the session for this request.
     *
     * @param boolean $create TRUE to create a new session, else FALSE
     *
     * @return \AppserverIo\Psr\Servlet\Http\HttpSessionInterface The session instance
     */
    public function getSession($create = false);

    /**
     * Returns the absolute path info started from the context path.
     *
     * @return string the absolute path info
     */
    public function getPathInfo();

    /**
     * Returns an part instance
     *
     * @return \AppserverIo\Psr\HttpMessage\PartInterface
     */
    public function getHttpPartInstance();

    /**
     * Returns the server name.
     *
     * @return string The server name
     */
    public function getServerName();

    /**
     * Returns query string of the actual request.
     *
     * @return string|null The query string of the actual request
     */
    public function getQueryString();

    /**
     * Returns header info by given key
     *
     * @param string $name The header key to get
     *
     * @return string|null
     */
    public function getHeader($name);

    /**
     * Returns headers data
     *
     * @return array
     */
    public function getHeaders();

    /**
     * Returns true if the request has a cookie header with the passed
     * name, else false.
     *
     * @param string $cookieName Name of the cookie header to be checked
     *
     * @return boolean true if the request has the cookie, else false
     */
    public function hasCookie($cookieName);

    /**
     * Returns the value of the cookie with the passed name.
     *
     * @param string $cookieName The name of the cookie to return
     *
     * @return \AppserverIo\Psr\HttpMessage\CookieInterface The cookie instance
     */
    public function getCookie($cookieName);

    /**
     * Adds the passed cookie to this request.
     *
     * @param \AppserverIo\Psr\HttpMessage\CookieInterface $cookie The cookie to add
     *
     * @return void
     */
    public function addCookie(CookieInterface $cookie);

    /**
     * Adds a header information got from connection.
     *
     * @param string $name  The header name
     * @param string $value The headers value
     *
     * @return void
     */
    public function addHeader($name, $value);

    /**
     * Adds a part to the parts collection.
     *
     * @param \AppserverIo\Appserver\ServletEngine\Http\Part $part A form part object
     * @param string                                         $name A manually defined name
     *
     * @return void
     */
    public function addPart(PartInterface $part, $name = null);

    /**
     * Returns the body content as string.
     *
     * @return string The body content
     */
    public function getBodyContent();

    /**
     * Returns the body stream as a resource.
     *
     * @return resource The body stream
     */
    public function getBodyStream();

    /**
     * Returns the Http request instance.
     *
     * @return \AppserverIo\Psr\HttpMessage\RequestInterface The Http request instance
     */
    public function getHttpRequest();

    /**
     * Returns the request method.
     *
     * @return string The request method
     */
    public function getMethod();

    /**
     * Returns an array with all request parameters.
     *
     * @return array The array with the request parameters
     */
    public function getParameterMap();

    /**
     * Returns the parameter with the passed name if available or null
     * if the parameter not exists.
     *
     * @param string  $name   The name of the parameter to return
     * @param integer $filter The filter to use
     *
     * @return string|null
     */
    public function getParameter($name, $filter = FILTER_SANITIZE_STRING);

    /**
     * Returns a part object by given name
     *
     * @param string $name The name of the form part
     *
     * @return \AppserverIo\Http\HttpPart
     */
    public function getPart($name);

    /**
     * Returns the parts collection as array
     *
     * @return array A collection of HttpPart objects
     */
    public function getParts();

    /**
     * Return the session identifier included in this request, if any.
     *
     * @return string The session identifier included in this request
     */
    public function getRequestedSessionId();

    /**
     * Return the session name included in this request, if any.
     *
     * @return string The session name included in this request
     */
    public function getRequestedSessionName();

    /**
     * Returns the servlet response bound to this request.
     *
     * @return \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface The response instance
     */
    public function getResponse();

    /**
     * Returns the server variable with the requested name.
     *
     * @param string $name The name of the server variable to be returned
     *
     * @return mixed The requested server variable
     */
    public function getServerVar($name);

    /**
     * Returns the array with the server variables.
     *
     * @return array The array with the server variables
     */
    public function getServerVars();

    /**
     * Returns the request URI.
     *
     * @return string The request URI
     */
    public function getUri();

    /**
     * Returns the protocol version.
     *
     * @return string The protocol version
     */
    public function getVersion();

    /**
     * Checks if header exists by given name.
     *
     * @param string $name The header name to check
     *
     * @return boolean
     */
    public function hasHeader($name);

    /**
     * Queries whether the request contains a parameter or not.
     *
     * @param string $name The name of the param we're query for
     *
     * @return boolean TRUE if the parameter is available, else FALSE
     */
    public function hasParameter($name);

    /**
     * Sets the flag that shows if the request has already been dispatched.
     *
     * @return boolean TRUE if the request has already been dispatched, else FALSE
     */
    public function isDispatched();

    /**
     * Set Base modifier which allows for base path generation within rewritten URL environments.
     *
     * @param string $baseModifier The base modifier
     *
     * @return void
     */
    public function setBaseModifier($baseModifier);

    /**
     * Resets the stream resource pointing to body content.
     *
     * @param resource $bodyStream The body content stream resource
     *
     * @return void
     */
    public function setBodyStream($bodyStream);

    /**
     * Sets the application context name (application name prefixed with a slash) for the actual request.
     *
     * @param string $contextPath The application context name
     *
     * @return void
     */
    public function setContextPath($contextPath);

    /**
     * Sets the flag to mark the request dispatched.
     *
     * @param boolean $dispatched TRUE if the request has already been dispatched, else FALSE
     *
     * @return void
     */
    public function setDispatched($dispatched = true);

    /**
     * Set headers data.
     *
     * @param array $headers The headers array to set
     *
     * @return void
     */
    public function setHeaders(array $headers);

    /**
     * Sets the method to be performed on the resource identified by the Request-URI.
     *
     * @param string $method The request method
     *
     * @return void
     */
    public function setMethod($method);

    /**
     * Sets an array with all request parameters.
     *
     * @param array $parameterMap The parameter map
     *
     * @return void
     */
    public function setParameterMap(array $parameterMap);

    /**
     * Sets the absolute path info started from the context path.
     *
     * @param string $pathInfo The path info
     *
     * @return void
     */
    public function setPathInfo($pathInfo);

    /**
     * Set the requested session ID for this request. This is normally called by
     * the HTTP Connector, when it parses the request headers.
     *
     * @param string $requestedSessionId The requested session ID
     *
     * @return void
     */
    public function setRequestedSessionId($requestedSessionId);

    /**
     * Set the requested session name for this request.
     *
     * @param string $requestedSessionName The requested session name
     *
     * @return void
     */
    public function setRequestedSessionName($requestedSessionName);

    /**
     * Sets the path to the servlet used to handle this request.
     *
     * @param string $servletPath The path to the servlet
     *
     * @return void
     */
    public function setServletPath($servletPath);

    /**
     * Sets the URI.
     *
     * @param string $uri The request URI
     *
     * @return void
     */
    public function setUri($uri);

    /**
     * Set the protocol version.
     *
     * @param string $version The protocol version
     *
     * @return void
     */
    public function setVersion($version);
}
