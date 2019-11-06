<?php

/**
 * \AppserverIo\Psr\Servlet\SessionUtils
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
class SessionUtils
{

    /**
     * Private constructor to disable direct instantiation.
     */
    private function __construct()
    {
    }

    /**
     * Creates a random string with the passed length.
     *
     * @param integer $length The byte length to generate
     *
     * @return string The hex encoded random bytes
     */
    public static function generateRandomString($length = 32)
    {

        // generate random bytes using openssl
        $randomBytes = openssl_random_pseudo_bytes($length, $cryptoSafe);

        // make sure the generation was a) successful and b) cryptographically safe
        if (false === $randomBytes || false === $cryptoSafe) {
            throw new \RuntimeException('Unable to generate cryptographically safe pseudo random bytes.');
        }

        return bin2hex($randomBytes);
    }
}
