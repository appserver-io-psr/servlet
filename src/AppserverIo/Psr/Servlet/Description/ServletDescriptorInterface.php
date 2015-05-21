<?php

/**
 * \AppserverIo\Psr\Servlet\Description\ServletDescriptorInterface
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
 * @link      https://github.com/appserver-io/servlet
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Servlet\Description;

/**
 * Interface for a servlet descriptor.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/servlet
 * @link      http://www.appserver.io
 *
 * The comments below hint at methods present in widely used explicit implementations of this interface and MAY
 * be introduced in the next MAJOR release of this PSR
 *
 * @method null  addUrlPattern()                addUrlPattern(string $urlPattern) Adds a URL pattern
 * @method array getPersistenceUnitReferences() getPersistenceUnitReferences()    The array with the persistence unit references.
 */
interface ServletDescriptorInterface
{

    /**
     * Returns the bean name.
     *
     * @return string The bean name
     */
    public function getName();

    /**
     * Returns the beans class name.
     *
     * @return string The beans class name
     */
    public function getClassName();

    /**
     * Returns the beans description.
     *
     * @return string The beans description
     */
    public function getDescription();

    /**
     * Returns the servlets display name.
     *
     * @return string The servlets display name
     */
    public function getDisplayName();

    /**
     * The array with the initialization parameters.
     *
     * @return array The initialization parameters
     */
    public function getInitParams();

    /**
     * The array with the URL patterns.
     *
     * @return array The URL patterns
     */
    public function getUrlPatterns();

    /**
     * The array with the EPB references.
     *
     * @return array The EPB references
     */
    public function getEpbReferences();

    /**
     * The array with the resource references.
     *
     * @return array The resource references
     */
    public function getResReferences();

    /**
     * Returns an array with the merge EBP and resource references.
     *
     * @return array The array with the merge all bean references
     */
    public function getReferences();

    /**
     * Merges the passed configuration into this one. Configuration values
     * of the passed configuration will overwrite the this one.
     *
     * @param \AppserverIo\Psr\Servlet\Description\ServletDescriptorInterface $servletDescriptor The configuration to merge
     *
     * @return void
     */
    public function merge(ServletDescriptorInterface $servletDescriptor);
}
