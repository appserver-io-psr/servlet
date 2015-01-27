<?php

/**
 * AppserverIo\Psr\Servlet\ServletRequestWrapper
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
class ServletRequestWrapper implements ServletRequestInterface
{

    /**
     * The servlet request instance.
     *
     * @var \AppserverIo\Psr\Servlet\ServletRequestInterface
     */
    protected $request;

    /**
     * Injects the passed request instance into this servlet request.
     *
     * @param \AppserverIo\Psr\Servlet\ServletRequestInterface $request The request instance used for initialization
     *
     * @return void
     */
    public function injectRequest(ServletRequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * Sets the passed request instance into this servlet request.
     *
     * @param \AppserverIo\Psr\Servlet\ServletRequestInterface $request The request instance used for initialization
     *
     * @return void
     */
    public function setRequest(ServletRequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * Returns the wrapped request object.
     *
     * @return \AppserverIo\Psr\Servlet\ServletRequestInterface The wrapped request object
     */
    public function getRequest()
    {
        return $this->request;
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
     * Return request content.
     *
     * @return resource The request content
     */
    public function getBodyStream()
    {
        return $this->getRequest()->getBodyStream();
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
     * Returns protocol version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->getRequest()->getVersion();
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
        return filter_var($this->getRequest()->getParameter($name), $filter);
    }

    /**
     * Returns a part object by given name
     *
     * @param string $name The name of the form part
     *
     * @return \AppserverIo\Psr\HttpMessage\PartInterface
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
     * Sets the flag that shows if the request has already been dispatched.
     *
     * @return boolean TRUE if the request has already been dispatched, else FALSE
     */
    public function isDispatched()
    {
        return $this->getRequest()->isDispatched();
    }
}
