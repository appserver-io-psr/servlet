<?php

/**
 * AppserverIo\Psr\Servlet\ServletSessionWrapper
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
 * A servlet session implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 */
class ServletSessionWrapper
{

    /**
     * The session instance.
     *
     * @var \AppserverIo\Psr\Servlet\ServletSessionInterface
     */
    protected $session;

    /**
     * Injects the passed session instance into this servlet session wrapper.
     *
     * @param \AppserverIo\Psr\Servlet\ServletSessionInterface $session The session instance used for initialization
     *
     * @return void
     */
    public function injectSession(ServletSessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * Returns the servlet session instance.
     *
     * @return \AppserverIo\Psr\Servlet\ServletSessionInterface The session instance
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Starts the session, if it has not been already started
     *
     * @return void
     */
    public function start()
    {
        $this->getSession()->start();
    }

    /**
     * Tells if the session has been started already.
     *
     * @return boolean
     */
    public function isStarted()
    {
        return $this->getSession()->isStarted();
    }

    /**
     * Returns the current session identifier
     *
     * @return string The current session identifier
     */
    public function getId()
    {
        return $this->getSession()->getId();
    }

    /**
     * Sets the current session identifier.
     *
     * @param string $id The current session identifier
     *
     * @return void
     */
    public function setId($id)
    {
         $this->getSession()->setId($id);
    }

    /**
     * Returns the unix time stamp marking the last point in time this session has
     * been in use.
     *
     * For the current (local) session, this method will always return the current
     * time. For a remote session, the unix timestamp will be returned.
     *
     * @return integer UNIX timestamp
     */
    public function getLastActivityTimestamp()
    {
        return $this->getSession()->getLastActivityTimestamp();
    }

    /**
     * Returns the session name.
     *
     * @return string The session name
     */
    public function getName()
    {
        return $this->getSession()->getName();
    }

    /**
     * Sets the session name.
     *
     * @param string $name The session name
     *
     * @return void
     */
    public function setName($name)
    {
         $this->getSession()->setName($name);
    }

    /**
     * Returns date and time after the session expires.
     *
     * @return integer|\DateTime The date and time after the session expires
     */
    public function getLifetime()
    {
        return $this->getSession()->getLifetime();
    }

    /**
     * Sets date and time after the session expires.
     *
     * @param integer|\DateTime $lifetime The date and time after the session expires
     *
     * @return void
     */
    public function setLifetime($lifetime)
    {
        $this->getSession()->setLifetime($lifetime);
    }

    /**
     * Returns the number of seconds until the session expires.
     *
     * @return integer|null Number of seconds until the session expires
     */
    public function getMaximumAge()
    {
        return $this->getSession()->getMaximumAge();
    }

    /**
     * Sets the number of seconds until the session expires.
     *
     * @param integer $maximumAge Number of seconds until the session expires
     *
     * @return void
     */
    public function setMaximumAge($maximumAge)
    {
        $this->getSession()->setMaximumAge($maximumAge);
    }

    /**
     * Returns the host to which the user agent will send this cookie.
     *
     * @return string|null The host to which the user agent will send this cookie
     */
    public function getDomain()
    {
        return $this->getSession()->getDomain();
    }

    /**
     * Sets the host to which the user agent will send this cookie.
     *
     * @param string $domain The host to which the user agent will send this cookie
     *
     * @return void
     */
    public function setDomain($domain)
    {
        $this->getSession()->setDomain($domain);
    }

    /**
     * Returns the path describing the scope of this cookie.
     *
     * @return string The path describing the scope of this cookie
     */
    public function getPath()
    {
        return $this->getSession()->getPath();
    }

    /**
     * Sets the path describing the scope of this cookie.
     *
     * @param string $path The path describing the scope of this cookie
     *
     * @return void
     */
    public function setPath($path)
    {
        $this->getSession()->setPath($path);
    }

    /**
     * Returns if this session should only be sent through a "secure" channel by the user agent.
     *
     * @return boolean TRUE if the session should only be sent through a "secure" channel, else FALSE
     */
    public function isSecure()
    {
        return $this->getSession()->isSecure();
    }

    /**
     * Sets the flag that this session should only be sent through a "secure" channel by the user agent.
     *
     * @param boolean $secure TRUE if the session should only be sent through a "secure" channel, else FALSE
     *
     * @return void
     */
    public function setSecure($secure = true)
    {
        $this->getSession()->setSecure($secure);
    }

    /**
     * Returns if this session should only be used through the HTTP protocol.
     *
     * @return boolean TRUE if the session should only be used through the HTTP protocol
     */
    public function isHttpOnly()
    {
        return $this->getSession()->isHttpOnly();
    }

    /**
     * Sets the flag that this session should only be used through the HTTP protocol.
     *
     * @param boolean $httpOnly TRUE if the session should only be used through the HTTP protocol
     *
     * @return void
     */
    public function setHttpOnly($httpOnly = true)
    {
        $this->getSession()->setHttpOnly($httpOnly);
    }

    /**
     * Returns the data associated with the given key.
     *
     * @param string $key An identifier for the content stored in the session.
     *
     * @return mixed The contents associated with the given key
     */
    public function getData($key)
    {
        return $this->getSession()->getData($key);
    }

    /**
     * Returns TRUE if a session data entry $key is available.
     *
     * @param string $key Entry identifier of the session data
     *
     * @return boolean
     */
    public function hasKey($key)
    {
        return $this->getSession()->hasKey($key);
    }

    /**
     * Stores the given data under the given key in the session
     *
     * @param string $key  The key under which the data should be stored
     * @param mixed  $data The data to be stored
     *
     * @return void
     */
    public function putData($key, $data)
    {
        $this->getSession()->putData($key, $data);
    }

    /**
     * Tags this session with the given tag.
     *
     * Note that third-party libraries might also tag your session. Therefore it is
     * recommended to use namespaced tags such as "Acme-Demo-MySpecialTag".
     *
     * @param string $tag The tag – must match be a valid cache frontend tag
     *
     * @return void
     */
    public function addTag($tag)
    {
        $this->getSession()->addTag($tag);
    }

    /**
     * Removes the specified tag from this session.
     *
     * @param string $tag The tag – must match be a valid cache frontend tag
     *
     * @return void
     */
    public function removeTag($tag)
    {
        $this->getSession()->removeTag($tag);
    }

    /**
     * Returns the tags this session has been tagged with.
     *
     * @return array The tags or an empty array if there aren't any
     */
    public function getTags()
    {
        return $this->getSession()->getTags();
    }

    /**
     * Returns TRUE if there is a session that can be resumed.
     *
     * If a to-be-resumed session was inactive for too long, this function will
     * trigger the expiration of that session. An expired session cannot be resumed.
     *
     * NOTE that this method does a bit more than the name implies: Because the
     * session info data needs to be loaded, this method stores this data already
     * so it doesn't have to be loaded again once the session is being used.
     *
     * @return boolean
     */
    public function canBeResumed()
    {
        return $this->getSession()->canBeResumed();
    }

    /**
     * Resumes an existing session, if any.
     *
     * @return integer If a session was resumed, the inactivity of since the last request is returned
     */
    public function resume()
    {
        return $this->getSession()->resume();
    }

    /**
     * Explicitly destroys all session data.
     *
     * @param string $reason The reason why the session has been destroyed
     *
     * @return void
     */
    public function destroy($reason)
    {
        $this->getSession()->destroy($reason);
    }

    /**
     * Returns the checksum for this session instance.
     *
     * @return string The checksum
     */
    public function checksum()
    {
        return $this->getSession()->checksum();
    }
}
