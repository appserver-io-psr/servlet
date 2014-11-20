<?php

/**
 * AppserverIo\Psr\Servlet\Http\HttpSessionWrapper
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

use AppserverIo\Psr\Servlet\ServletSessionWrapper;

/**
 * A wrapper to simplify session handling.
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
class HttpSessionWrapper extends ServletSessionWrapper implements HttpSession
{

    /**
     * Injects the passed HTTP session instance into this servlet session wrapper.
     *
     * @param \AppserverIo\Psr\Servlet\Http\HttpSession $session The session instance used for initialization
     *
     * @return void
     */
    public function injectHttpSession(HttpSession $session)
    {
        $this->injectSession($session);
    }

    /**
     * Generates and propagates a new session ID and transfers all existing data
     * to the new session.
     *
     * @return string The new session ID
     * @throws \AppserverIo\Psr\Servlet\IllegalStateException
     */
    public function renewId()
    {
        return $this->getSession()->renewId();
    }

    /**
     * Shuts down this session
     *
     * This method must not be called manually – it is invoked by Flow's object
     * management.
     *
     * @return void
     */
    public function shutdownObject()
    {
        $this->getSession()->shutdownObject();
    }

    /**
     * Explicitly writes and closes the session
     *
     * @return void
     */
    public function close()
    {
        $this->getSession()->close();
    }
}
