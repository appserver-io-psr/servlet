<?php

/**
 * AppserverIo\Psr\Servlet\Http\HttpServletResponseWrapper
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

use AppserverIo\Psr\Servlet\ServletResponse;
use AppserverIo\Psr\HttpMessage\CookieInterface;
use AppserverIo\Psr\HttpMessage\ResponseInterface;

/**
 * A Http servlet response implementation.
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
interface HttpServletResponse extends ServletResponse, ResponseInterface
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
