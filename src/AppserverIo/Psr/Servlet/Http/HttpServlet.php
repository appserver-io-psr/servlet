<?php

/**
 * AppserverIo\Psr\Servlet\Http\HttpServlet
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

use AppserverIo\Psr\HttpMessage\Protocol;
use AppserverIo\Psr\Servlet\GenericServlet;
use AppserverIo\Psr\Servlet\ServletException;
use AppserverIo\Psr\Servlet\ServletRequest;
use AppserverIo\Psr\Servlet\ServletResponse;
use AppserverIo\Psr\Servlet\ServletSession;
use AppserverIo\Psr\Servlet\ServletConfig;

/**
 * Abstract Http servlet implementation.
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
abstract class HttpServlet extends GenericServlet
{

    /**
     * Implements Http CONNECT method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @param \AppserverIo\Psr\Servlet\
     */
    protected $sessionSettings;

    /**
     * Implements Http CONNECT method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doConnect(HttpServletRequest $servletRequest, HttpServletResponse $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in this servlet.', __METHOD__));
    }

    /**
     * Implements Http DELETE method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doDelete(HttpServletRequest $servletRequest, HttpServletResponse $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in this servlet.', __METHOD__));
    }

    /**
     * Implements Http GET method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doGet(HttpServletRequest $servletRequest, HttpServletResponse $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in this servlet.', __METHOD__));
    }

    /**
     * Implements Http HEAD method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doHead(HttpServletRequest $servletRequest, HttpServletResponse $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in this servlet.', __METHOD__));
    }

    /**
     * Implements Http OPTIONS method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doOptions(HttpServletRequest $servletRequest, HttpServletResponse $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in this servlet.', __METHOD__));
    }

    /**
     * Implements Http POST method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doPost(HttpServletRequest $servletRequest, HttpServletResponse $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in this servlet.', __METHOD__));
    }

    /**
     * Implements Http PUT method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doPut(HttpServletRequest $servletRequest, HttpServletResponse $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in this servlet.', __METHOD__));
    }

    /**
     * Implements Http TRACE method.
     *
     * @param \AppserverIo\Psr\Servlet\Http\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\Http\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not implemented
     */
    public function doTrace(HttpServletRequest $servletRequest, HttpServletResponse $servletResponse)
    {
        throw new ServletException(sprintf('Method %s is not implemented in this servlet.', __METHOD__));
    }

    /**
     * Delegation method for specific Http methods.
     *
     * @param \AppserverIo\Psr\Servlet\ServletRequest  $servletRequest  The request instance
     * @param \AppserverIo\Psr\Servlet\ServletResponse $servletResponse The response instance
     *
     * @return void
     * @throws \AppserverIo\Psr\Servlet\ServletException Is thrown if the request method is not available
     */
    public function service(ServletRequest $servletRequest, ServletResponse $servletResponse)
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
