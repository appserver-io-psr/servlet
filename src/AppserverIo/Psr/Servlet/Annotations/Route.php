<?php

/**
 * \AppserverIo\Psr\Servlet\Annotations\Route
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

namespace AppserverIo\Psr\Servlet\Annotations;

/**
 * Annotation to define a servlets routing.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/servlet
 * @link      http://www.appserver.io
 *
 * @Annotation
 * @Target({"CLASS"})
 */
class Route
{

    /**
     * The value of the name attribute.
     *
     * @var string
     */
    protected $name;

    /**
     * The value of the displayName attribute.
     *
     * @var string
     */
    protected $displayName;

    /**
     * The value of the description attribute.
     *
     * @var string
     */
    protected $description;

    /**
     * The URL patterns the servlet is mapped to.
     *
     * @var array
     */
    protected $urlPattern = array();

    /**
     * The URL initialization parameters the servlet is mapped to.
     *
     * @var array
     */
    protected $initParams = array();

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param array $values The annotation values
     */
    public function __construct(array $values = array())
    {

        // set the name attribute, if available
        if (isset($values[AnnotationKeys::NAME])) {
            $this->name = $values[AnnotationKeys::NAME];
        }

        // set the display name attribute, if available
        if (isset($values[AnnotationKeys::DISPLAY_NAME])) {
            $this->displayName = $values[AnnotationKeys::DISPLAY_NAME];
        }

        // set the display name attribute, if available
        if (isset($values[AnnotationKeys::DESCRIPTION])) {
            $this->description = $values[AnnotationKeys::DESCRIPTION];
        }

        // set the url pattern attribute, if available
        if (isset($values[AnnotationKeys::URL_PATTERN])) {
            $this->urlPattern = $values[AnnotationKeys::URL_PATTERN];
        }

        // set the init params attribute, if available
        if (isset($values[AnnotationKeys::INIT_PARAMS])) {
            $this->initParams = $values[AnnotationKeys::INIT_PARAMS];
        }
    }

    /**
     * Returns the value of the name attribute.
     *
     * @return string The annotations name attribute
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of the displayName attribute.
     *
     * @return string The annotations displayName attribute
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Returns the value of the description attribute.
     *
     * @return string The annotations description attribute
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the URL patterns the servlet is mapped to.
     *
     * @return array The URL patterns
     */
    public function getUrlPattern()
    {
        return $this->urlPattern;
    }

    /**
     * Returns the URL initialization parameters the servlet is mapped to.
     *
     * @return array The initialization parameters
     */
    public function getInitParams()
    {
        return $this->initParams;
    }
}
