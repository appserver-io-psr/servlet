<?php

/**
 * \AppserverIo\Psr\Servlet\Annotations\AnnotationKeys
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
 */
class AnnotationKeys
{

    /**
     * Key for the annotation property 'name'.
     *
     * @var string
     */
    const NAME = 'name';

    /**
     * Key for the annotation property 'displayName'.
     *
     * @var string
     */
    const DISPLAY_NAME = 'displayName';

    /**
     * Key for the annotation property 'description'.
     *
     * @var string
     */
    const DESCRIPTION = 'description';

    /**
     * Key for the annotation property 'urlPattern'.
     *
     * @var string
     */
    const URL_PATTERN = 'urlPattern';

    /**
     * Key for the annotation property 'initParams'.
     *
     * @var string
     */
    const INIT_PARAMS = 'initParams';
}
