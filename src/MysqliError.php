<?php declare(strict_types=1);

/*
 * This file is part of the VV package.
 *
 * (c) Volodymyr Sarnytskyi <v00v4n@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace VV\Db\Mysqli;

/**
 * Class MysqliError
 *
 * @package VV\Db\Mysql
 */
class MysqliError extends \RuntimeException {
    use \VV\Exception\Core;
}