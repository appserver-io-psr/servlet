<?php

/**
 * \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface
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

use AppserverIo\Psr\Servlet\ServletResponseInterface;
use AppserverIo\Psr\HttpMessage\CookieInterface;
use AppserverIo\Psr\HttpMessage\ResponseInterface;

/**
 * A Http servlet response implementation.
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
 * @method null            appendBodyStream()      appendBodyStream(string $content) Appends the content
 * @method integer         copyBodyStream()        copyBodyStream(resource $sourceStream, integer $maxlength = null, integer $offset = 0) Copies a source stream to body stream
 * @method string          getBodyContent()        getBodyContent() Return content
 * @method resource        getBodyStream()         getBodyStream() Returns the body stream as a resource
 * @method \ArrayAccess    getCookies()            getCookies() Returns the cookies
 * @method \Exception|null getException()          getException() Returns the exception bound to the response
 * @method integer         getState()              getState() Returns the current state
 * @method boolean         hasException()          hasException() Queries whether the response contains an exception or not
 * @method boolean         hasState()              hasState(integer $state) Compares current state with given state
 * @method null            redirect()              redirect(string $url, integer $code = 301) Redirects to the passed URL by adding a 'Location' header and setting the appropriate status code, by default 301
 * @method null            setBodyStream()         setBodyStream(resource $bodyStream) Resets the stream resource pointing to body content
 * @method null            setException()          setException(\Exception $exception) Binds the exception to the response
 * @method null            setState()              setState(integer $state) Sets state of response
 * @method null            setStatusReasonPhrase() setStatusReasonPhrase(string $statusReasonPhrase) Sets the status reason phrase
 */
interface HttpServletResponseInterface extends ServletResponseInterface, ResponseInterface
{

    /**
     * Adds a cookie.
     *
     * @param \AppserverIo\Psr\HttpMessage\CookieInterface $cookie The cookie instance to add
     *
     * @return void
     */
    public function addCookie(CookieInterface $cookie);

    /**
     * Returns TRUE if the response already has a cookie with the passed
     * name, else FALSE.
     *
     * @param string $cookieName Name of the cookie to be checked
     *
     * @return boolean TRUE if the response already has the cookie, else FALSE
     */
    public function hasCookie($cookieName);

    /**
     * Returns the cookie with the  a cookie
     *
     * @param string $cookieName Name of the cookie to be checked
     *
     * @return \AppserverIo\Psr\HttpMessage\CookieInterface $cookie The cookie instance
     */
    public function getCookie($cookieName);

    /**
     * Set's the headers
     *
     * @param array $headers The headers array
     *
     * @return void
     */
    public function setHeaders(array $headers);

    /**
     * Return's the headers array
     *
     * @return array
     */
    public function getHeaders();

    /**
     * Add's a header to array
     *
     * @param string     $header The header label e.g. Accept or Content-Length
     * @param string|int $value  The header value
     *
     * @return void
     */
    public function addHeader($header, $value);

    /**
     * Returns header info by given key
     *
     * @param string $key The headers key to return
     *
     * @return string|null
     */
    public function getHeader($key);

    /**
     * Returns the headers as string
     *
     * @return string
     */
    public function getHeadersAsString();

    /**
     * Removes one single header from the headers array.
     *
     * @param string $header The header to remove
     *
     * @return void
     */
    public function removeHeader($header);

    /**
     * Checks if header exists by given name.
     *
     * @param string $name The header name to check
     *
     * @return boolean TRUE if the header is available, else FALSE
     */
    public function hasHeader($name);

    /**
     * Returns Http response code number only
     *
     * @return string
     */
    public function getStatusCode();

    /**
     * Gets the response Reason-Phrase, a short textual description of the
     * Status-Code.
     *
     * Because a Reason-Phrase is not a required element in response
     * Status-Line, the Reason-Phrase value MAY be null. Implementations MAY
     * choose to return the default RFC 2616 recommended reason phrase for the
     * response's Status-Code.
     *
     * @return string|null Reason phrase, or null if unknown.
     */
    public function getStatusReasonPhrase();

    /**
     * Returns response Http version.
     *
     * @return string
     */
    public function getVersion();

    /**
     * Reset the body stream.
     *
     * @return void
     */
    public function resetBodyStream();

    /**
     * Sets the HTTP response status code.
     *
     * @param integer $code The HTTP status code to set
     *
     * @return void
     */
    public function setStatusCode($code);
}
