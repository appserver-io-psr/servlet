<?php

/**
 * \AppserverIo\Psr\Servlet\Http\HttpServlet
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

use AppserverIo\Psr\HttpMessage\Protocol;
use AppserverIo\Psr\Servlet\GenericServlet;
use AppserverIo\Psr\Servlet\ServletException;
use AppserverIo\Psr\Servlet\ServletRequestInterface;
use AppserverIo\Psr\Servlet\ServletResponseInterface;

/**
 * Abstract Http servlet implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
abstract class HttpServlet extends GenericServlet
{

    /**
     * Implements Http CONNECT method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @param \AppserverIo\Psr\Servlet\
     */
    protected $sessionSettings;

    /**
     * Implements Http CONNECT method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doConnect(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Implements Http DELETE method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doDelete(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Implements Http GET method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doGet(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Implements Http HEAD method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doHead(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Implements Http OPTIONS method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doOptions(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Implements Http POST method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doPost(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Implements Http PUT method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doPut(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Implements Http TRACE method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doTrace(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Implements Http PATCH method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\HttpServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doPatch(HttpServletRequestInterface $servletRequest, HttpServletResponseInterface $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in servlet %s.', __METHOD__, get_class($this)));
    }

    /**
     * Delegation method for specific Http methods.
     *
     * @param \AppserverIo\Psr\Servlet\ServletRequestInterface  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\ServletResponseInterface $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not available
     */
    public function service(ServletRequestInterface $servletRequest, ServletResponseInterface $servletResponse)
    {

        // pre-initialize response
        $servletResponse->addHeader(Protocol::HEADER_X_POWERED_BY, get_class($this));

        // check the request method to invoke the appropriate method
        switch ($servletRequest->getMethod()) {
            case Protocol::METHOD_CONNECT:
                $this->doConnect($servletRequest, $servletResponse);
                break;
            case Protocol::METHOD_DELETE:
                $this->doDelete($servletRequest, $servletResponse);
                break;
            case Protocol::METHOD_GET:
                $this->doGet($servletRequest, $servletResponse);
                break;
            case Protocol::METHOD_HEAD:
                $this->doHead($servletRequest, $servletResponse);
                break;
            case Protocol::METHOD_OPTIONS:
                $this->doOptions($servletRequest, $servletResponse);
                break;
            case Protocol::METHOD_POST:
                $this->doPost($servletRequest, $servletResponse);
                break;
            case Protocol::METHOD_PUT:
                $this->doPut($servletRequest, $servletResponse);
                break;
            case Protocol::METHOD_TRACE:
                $this->doTrace($servletRequest, $servletResponse);
                break;
            case Protocol::METHOD_PATCH:
                $this->doPatch($servletRequest, $servletResponse);
                break;
            default:
                throw new ServletException(
                    sprintf('%s is not implemented yet.', $servletRequest->getMethod())
                );
        }
    }

    /**
     * Destroys the object on shutdown.
     *
     * @return void
     */
    public function destroy()
    {
    }
}
