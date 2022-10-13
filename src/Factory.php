<?php declare(strict_types=1);
/*
 * This file is part of the TheLimbo package.
 *
 * (c) dr0n1k <a.dronov4job@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Limbo\Contracts\Factory;

/**
 * Class Factory
 *
 * @package   Limbo\Contracts\Factory
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @license   MIT
 * @copyright TheLimbo (c) 2022
 */
abstract class Factory implements FactoryContract
{
    /**
     * @inheritDoc
     */
    public static function factory(): static
    {
        return new static();
    }
}
