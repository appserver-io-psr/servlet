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

use AppserverIo\Psr\Servlet\ServletRequestInterface;
use AppserverIo\Psr\HttpMessage\RequestInterface;

/**
 * A servlet request implementation.
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
 *
 * The comments below hint at methods present in widely used explicit implementations of this interface and MAY
 * be introduced in the next MAJOR release of this PSR
 *
 * @method null        __cleanup()               __cleanup() Cleanup method that allows manual garbage collection
 * @method null        injectContext()           injectContext(\AppserverIo\Psr\Context\ContextInterface $context) Injects the context that allows access to session and server information
 * @method \AppserverIo\Psr\Context\ContextInterface getContext() getContext() Returns the context that allows access to session and server information
 * @method \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface getResponse() getResponse() Returns the servlet response bound to this request
 * @method string      getBodyContent()          getBodyContent() Return content
 * @method resource    getBodyStream()           getBodyStream() Returns the body stream as a resource
 * @method boolean     isDispatched()            isDispatched() Sets the flag that shows if the request has already been dispatched
 * @method null        setServletPath()          setServletPath(string $servletPath) Sets the path to the servlet used to handle this request
 * @method null        setPathInfo()             setPathInfo(string $pathInfo) Sets the absolute path info started from the context path
 * @method null        setBaseModifier()         setBaseModifier(string $baseModifier) Set the base modifier
 * @method null        setBodyStream()           setBodyStream(resource $bodyStream) Resets the stream resource pointing to body content
 * @method null        setVersion()              setVersion($version) Set protocol version
 * @method string      getVersion()              getVersion() Returns protocol version
 * @method boolean     hasParameter()            hasParameter(string $name) Queries whether the request contains a parameter or not
 * @method string|null getParameter()            getParameter(string $name, integer $filter = FILTER_SANITIZE_STRING) Returns the parameter with the passed name if available or null if the parameter not exists
 * @method \AppserverIo\Http\HttpPart getPart()  getPart(string $name) Returns a part object by given name
 * @method array       getParts()                getParts() Returns the parts collection as array
 * @method null        addPart()                 addPart(\AppserverIo\Appserver\ServletEngine\Http\Part $part, string $name = null) Adds a part to the parts collection
 * @method null        setContextPath()          setContextPath(string $contextPath) Sets the application context name (application name prefixed with a slash) for the actual request
 * @method null        addCookie()               addCookie(\AppserverIo\Psr\HttpMessage\CookieInterface $cookie) Adds the passed cookie to this request
 * @method null        setHeaders()              setHeaders(array $headers) Set headers data
 * @method null        addHeader()               addHeader(string $name, string $value) Adds a header information got from connection
 * @method boolean     hasHeader()               hasHeader(string $name) Checks if header exists by given name
 * @method null        setRequestedSessionId() setRequestedSessionId(string $requestedSessionId) Set the requested session ID for this request.  This is normally called by the HTTP Connector, when it parses the request headers
 * @method string      getRequestedSessionId()   getRequestedSessionId() Return the session identifier included in this request, if any
 * @method null        setRequestedSessionName() setRequestedSessionName(string $requestedSessionName) Set the requested session name for this request
 * @method string      getRequestedSessionName() getRequestedSessionName() Return the session name included in this request, if any
 * @method null        setDispatched()           setDispatched(boolean $dispatched = true) Sets the flag to mark the request dispatched
 * @method string      getUri()                  getUri() Returns request uri
 * @method null        setUri()                  setUri(string $uri) Sets the URI
 * @method string      getMethod()               getMethod() Returns request method
 * @method null        setMethod()               setMethod(string $method) Sets the method to be performed on the resource identified by the Request-URI
 * @method \AppserverIo\Storage\GenericStackable getServerVars() getServerVars() Returns the array with the server variables
 * @method mixed       getServerVar()            getServerVar(string $name) Returns the server variable with the requested name
 * @method null        injectServerVars()        injectServerVars(\AppserverIo\Storage\GenericStackable $serverVars) Injects the server variables
 * @method null        injectHttpRequest()       injectHttpRequest(\AppserverIo\Psr\HttpMessage\RequestInterface $httpRequest)
 * @method \AppserverIo\Psr\HttpMessage\RequestInterface getHttpRequest() getHttpRequest() Returns the Http request instance
 * @method \AppserverIo\Appserver\ServletEngine\Http\RequestContextInterface getRequestHandler() getRequestHandler() Returns the context that allows access to session and server information
 * @method null        injectResponse()          injectResponse(\AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $response) Injects the servlet response bound to this request
 * @method null        setParameterMap()         setParameterMap(array $parameterMap) Returns an array with all request parameters
 * @method array       getParameterMap()         getParameterMap() Returns an array with all request parameters
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
}
