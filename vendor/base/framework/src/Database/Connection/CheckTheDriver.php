<?php
/**
 * Created by PhpStorm.
 * Author: Jorge Lauro Campos Rodrigues <jorgerodrigues9@outlook.com>
 * Date: 09/10/17
 * Time: 08:02
 */

trait CheckTheDriver
{
    /**
     * Contém nomes dos drivers implementados pela interface PDO.
     *
     * @var array
     */
    private $defaultDrives = [
        'mysql',
    ];

    /**
     * Veififica se nome do drive é válido.
     *
     * @param string $name
     * @return boolean
     */
    public function isValidDriveName($name)
    {
        return in_array($name, $this->defaultDrives);
    }
}