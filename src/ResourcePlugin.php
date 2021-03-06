<?php

/*
 * This file is part of the Composer Resource Plugin package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Composer\ResourcePlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * A plugin for managing resources of Composer dependencies.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResourcePlugin implements PluginInterface
{
    /**
     * Apply plugin modifications to composer
     *
     * @param Composer    $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
    }
}
