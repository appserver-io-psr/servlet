<?php

/**
 * \AppserverIo\Psr\Servlet\Http\HttpServletRequestWrapper
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
use AppserverIo\Psr\Servlet\ServletRequestWrapper;

/**
 * A servlet request implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
class HttpServletRequestWrapper extends ServletRequestWrapper implements HttpServletRequestInterface
{

    /**
     * Injects the passed request instance into this servlet request.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface $request The request instance used for initialization
     *
     * @return void
     */
    public function injectHttpRequest(HttpServletRequestInterface $request)
    {
        $this->injectRequest($request);
    }

    /**
     * Returns the base modifier which allows for base path generation within rewritten URL environments
     *
     * @return string
     */
    public function getBaseModifier()
    {
        return $this->getRequest()->getBaseModifier();
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
     * @return \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Returns the part of this request's URL from the protocol name up to the query string in the first line of the HTTP request.
     *
     * @return string
     */
    public function getRequestUri()
    {
        return $this->getRequest()->getRequestUri();
    }

    /**
     * Returns an part instance
     *
     * @return \AppserverIo\Psr\HttpMessage\PartInterface
     */
    public function getHttpPartInstance()
    {
        return $this->getRequest()->getHttpPartInstance();
    }

    /**
     * Returns the URL the client used to make the request.
     *
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->getRequest()->getRequestUrl();
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
     * Return the session identifier proposed by the actual configuration and request state.
     *
     * @return string The session identifier proposed for this request
     */
    public function getProposedSessionId()
    {
        return $this->getRequest()->getProposedSessionId();
    }

    /**
     * Returns the session for this request.
     *
     * @param boolean $create TRUE to create a new session, else FALSE
     *
     * @return \AppserverIo\Psr\Servlet\Http\HttpSessionInterface The session instance
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
        $this->getRequest()->setMethod($method);
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

    /**
     * Adds the passed cookie to this request.
     *
     * @param \AppserverIo\Psr\HttpMessage\CookieInterface $cookie The cookie to add
     *
     * @return void
     */
    public function addCookie(CookieInterface $cookie)
    {
        $this->getRequest()->addCookie($cookie);
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
     * Adds a part to the parts collection.
     *
     * @param \AppserverIo\Appserver\ServletEngine\Http\Part $part A form part object
     * @param string                                         $name A manually defined name
     *
     * @return void
     */
    public function addPart(PartInterface $part, $name = null)
    {
        $this->getRequest()->addPart($part, $name);
    }

    /**
     * Returns the body content as string.
     *
     * @return string The body content
     */
    public function getBodyContent()
    {
        return $this->getRequest()->getBodyContent();
    }

    /**
     * Returns the body stream as a resource.
     *
     * @return resource The body stream
     */
    public function getBodyStream()
    {
        return $this->getRequest()->getBodyStream();
    }

    /**
     * Returns the Http request instance.
     *
     * @return \AppserverIo\Psr\HttpMessage\RequestInterface The Http request instance
     */
    public function getHttpRequest()
    {
        return $this->getRequest()->getHttpRequest();
    }

    /**
     * Returns an array with all request parameters.
     *
     * @return array The array with the request parameters
     */
    public function getParameterMap()
    {
        return $this->getRequest()->getParameterMap();
    }

    /**
     * Returns the parameter with the passed name if available or null
     * if the parameter not exists.
     *
     * @param string  $name   The name of the parameter to return
     * @param integer $filter The filter to use
     *
     * @return string|null
     */
    public function getParameter($name, $filter = FILTER_SANITIZE_STRING)
    {
        return $this->getRequest()->getParameter($name, $filter);
    }

    /**
     * Returns a part object by given name
     *
     * @param string $name The name of the form part
     *
     * @return \AppserverIo\Http\HttpPart
     */
    public function getPart($name)
    {
        return $this->getRequest()->getPart($name);
    }

    /**
     * Returns the parts collection as array
     *
     * @return array A collection of HttpPart objects
     */
    public function getParts()
    {
        return $this->getRequest()->getParts();
    }

    /**
     * Return the session identifier included in this request, if any.
     *
     * @return string The session identifier included in this request
     */
    public function getRequestedSessionId()
    {
        return $this->getRequest()->getRequestedSessionId();
    }

    /**
     * Return the session name included in this request, if any.
     *
     * @return string The session name included in this request
     */
    public function getRequestedSessionName()
    {
        return $this->getRequest()->getRequestedSessionName();
    }

    /**
     * Returns the servlet response bound to this request.
     *
     * @return \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface The response instance
     */
    public function getResponse()
    {
        return $this->getRequest()->getResponse();
    }

    /**
     * Returns the server variable with the requested name.
     *
     * @param string $name The name of the server variable to be returned
     *
     * @return mixed The requested server variable
     */
    public function getServerVar($name)
    {
        return $this->getRequest()->getServerVar($name);
    }

    /**
     * Returns the array with the server variables.
     *
     * @return array The array with the server variables
     */
    public function getServerVars()
    {
        return $this->getRequest()->getServerVars();
    }

    /**
     * Returns the request URI.
     *
     * @return string The request URI
     */
    public function getUri()
    {
        return $this->getRequest()->getUri();
    }

    /**
     * Returns the protocol version.
     *
     * @return string The protocol version
     */
    public function getVersion()
    {
        return $this->getRequest()->getVersion();
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
     * Queries whether the request contains a parameter or not.
     *
     * @param string $name The name of the param we're query for
     *
     * @return boolean TRUE if the parameter is available, else FALSE
     */
    public function hasParameter($name)
    {
        return $this->getRequest()->hasParameter($name);
    }

    /**
     * Sets the flag that shows if the request has already been dispatched.
     *
     * @return boolean TRUE if the request has already been dispatched, else FALSE
     */
    public function isDispatched()
    {
        return $this->getRequest()->isDispatched();
    }

    /**
     * Set Base modifier which allows for base path generation within rewritten URL environments.
     *
     * @param string $baseModifier The base modifier
     *
     * @return void
     */
    public function setBaseModifier($baseModifier)
    {
        $this->getRequest()->setBaseModifier($baseModifier);
    }

    /**
     * Resets the stream resource pointing to body content.
     *
     * @param resource $bodyStream The body content stream resource
     *
     * @return void
     */
    public function setBodyStream($bodyStream)
    {
        $this->getRequest()->setBodyStream($bodyStream);
    }

    /**
     * Sets the application context name (application name prefixed with a slash) for the actual request.
     *
     * @param string $contextPath The application context name
     *
     * @return void
     */
    public function setContextPath($contextPath)
    {
        $this->getRequest()->setContextPath($contextPath);
    }

    /**
     * Sets the flag to mark the request dispatched.
     *
     * @param boolean $dispatched TRUE if the request has already been dispatched, else FALSE
     *
     * @return void
     */
    public function setDispatched($dispatched = true)
    {
        $this->getRequest()->setDispatched($dispatched);
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
     * Sets an array with all request parameters.
     *
     * @param array $parameterMap The parameter map
     *
     * @return void
     */
    public function setParameterMap(array $parameterMap)
    {
        $this->getRequest()->setParameterMap($parameterMap);
    }

    /**
     * Sets the absolute path info started from the context path.
     *
     * @param string $pathInfo The path info
     *
     * @return void
     */
    public function setPathInfo($pathInfo)
    {
        $this->getRequest()->setPathInfo($pathInfo);
    }

    /**
     * Set the requested session ID for this request. This is normally called by
     * the HTTP Connector, when it parses the request headers.
     *
     * @param string $requestedSessionId The requested session ID
     *
     * @return void
     */
    public function setRequestedSessionId($requestedSessionId)
    {
        $this->getRequest()->setRequestedSessionId($requestedSessionId);
    }

    /**
     * Set the requested session name for this request.
     *
     * @param string $requestedSessionName The requested session name
     *
     * @return void
     */
    public function setRequestedSessionName($requestedSessionName)
    {
        $this->getRequest()->setRequestedSessionName($requestedSessionName);
    }

    /**
     * Sets the path to the servlet used to handle this request.
     *
     * @param string $servletPath The path to the servlet
     *
     * @return void
     */
    public function setServletPath($servletPath)
    {
        $this->getRequest()->setServletPath($servletPath);
    }

    /**
     * Sets the URI.
     *
     * @param string $uri The request URI
     *
     * @return void
     */
    public function setUri($uri)
    {
        $this->getRequest()->setUri($uri);
    }

    /**
     * Set the protocol version.
     *
     * @param string $version The protocol version
     *
     * @return void
     */
    public function setVersion($version)
    {
        $this->getRequest()->setVersion($version);
    }
}
