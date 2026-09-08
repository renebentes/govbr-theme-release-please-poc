<?php

/**
 * GovBR Theme Release Please POC
 *
 * @copyright  (C) 2026 Rene B. Pinto. <renebentes@yahoo.com.br>
 * @license    MIT; see LICENSE
 *
 * @since       2.0.0
 */

use GovBrTheme\Version;

$version = new Version();

echo 'Version: ' . $version->getFullVersion();
echo 'Major Version: ' . $version::MAJOR_VERSION;
echo 'Minor Version: ' . $version::MINOR_VERSION;
