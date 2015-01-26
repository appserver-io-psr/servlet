<?php

/**
 * AppserverIo\Psr\Servlet\ServletResponseInterface
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
 * A servlet request implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
interface ServletResponseInterface
{

    /**
     * Returns the body stream as a resource.
     *
     * @return resource The body stream
     */
    public function getBodyStream();

    /**
     * Appends body stream with content.
     *
     * @param string $content The content to append
     *
     * @return integer The number of written bytes
     */
    public function appendBodyStream($content);

    /**
     * Copies a source stream to body stream.
     *
     * @param resource $sourceStream The file pointer to source stream
     * @param integer  $maxlength    The max length to read from source stream
     * @param integer  $offset       The offset from source stream to read
     *
     * @return integer the total number of bytes copied
     */
    public function copyBodyStream($sourceStream, $maxlength = null, $offset = null);

    /**
     * Return content
     *
     * @return string $content
     */
    public function getBodyContent();

    /**
     * Reset the body stream
     *
     * @return void
     */
    public function resetBodyStream();

    /**
     * Resets the stream resource pointing to body content.
     *
     * @param resource $bodyStream The body content stream resource
     *
     * @return void
     */
    public function setBodyStream($bodyStream);
}
