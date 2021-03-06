<?php

/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Rocketeer\Dummies\Plugins;

use Rocketeer\Plugins\AbstractPlugin;

class DummyBuilderPlugin extends AbstractPlugin
{
    /**
     * @var array
     */
    protected $lookups = [
        'tasks' => 'Rocketeer\Dummies\Tasks\%s',
    ];
}
