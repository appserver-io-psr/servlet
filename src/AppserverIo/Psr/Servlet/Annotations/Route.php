<?php

/**
 * AppserverIo\Psr\Servlet\Annotations\Route
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

namespace AppserverIo\Psr\Servlet\Annotations;

use AppserverIo\Lang\Reflection\ReflectionAnnotation;

/**
 * Annotation to define a servlets routing.
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
class Route extends ReflectionAnnotation
{

    /**
     * The annotation to define a servlets routing.
     *
     * @var string
     */
    const ANNOTATION = 'Route';

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param string $annotationName The annotation name
     * @param array  $values         The annotation values
     */
    public function __construct($annotationName, array $values = array())
    {

        // initialize the array values
        $this->values[AnnotationKeys::URL_PATTERN] = array();
        $this->values[AnnotationKeys::INIT_PARAMS] = array();

        // pass values to parent constructor
        parent::__construct($annotationName, $values);
    }

    /**
     * This method returns the class name as
     * a string.
     *
     * @return string
     */
    public static function __getClass()
    {
        return __CLASS__;
    }

    /**
     * Returns the value of the name attribute.
     *
     * @return string The annotations name attribute
     */
    public function getName()
    {
        return $this->values[AnnotationKeys::NAME];
    }

    /**
     * Returns the value of the displayName attribute.
     *
     * @return string The annotations displayName attribute
     */
    public function getDisplayName()
    {
        return $this->values[AnnotationKeys::DISPLAY_NAME];
    }

    /**
     * Returns the value of the description attribute.
     *
     * @return string The annotations description attribute
     */
    public function getDescription()
    {
        return $this->values[AnnotationKeys::DESCRIPTION];
    }

    /**
     * Returns the URL patterns the servlet is mapped to.
     *
     * @return array The URL patterns
     */
    public function getUrlPattern()
    {
        return $this->values[AnnotationKeys::URL_PATTERN];
    }

    /**
     * Returns the URL initialization parameters the servlet is mapped to.
     *
     * @return array The initialization parameters
     */
    public function getInitParams()
    {
        return $this->values[AnnotationKeys::INIT_PARAMS];
    }
}
