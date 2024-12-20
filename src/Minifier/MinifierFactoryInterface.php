<?php

declare(strict_types=1);

/*
 * This file is part of the SensioLabs MinifyBundle package.
 *
 * (c) Simon André - Sensiolabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sensiolabs\MinifyBundle\Minifier;

/**
 * @template T of MinifierInterface
 *
 * @author Simon André <smn.andre@gmail.com>
 */
interface MinifierFactoryInterface
{
    /**
     * @return T&MinifierInterface
     */
    public function create(): MinifierInterface;
}
