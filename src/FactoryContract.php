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
 * Interface FactoryContract
 *
 * @package   Limbo\Contracts\Factory
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
interface FactoryContract
{
    /**
     * Create factory instance.
     *
     * @return static
     */
    public static function factory(): static;
}
