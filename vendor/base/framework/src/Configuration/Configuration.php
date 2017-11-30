<?php
/**
 * Created by PhpStorm.
 * Author: Jorge Lauro Campos Rodrigues <jorgerodrigues9@outlook.com>
 * Date: 09/10/17
 * Time: 08:02
 */

class Configuration
{
    /**
     * Mapa de arquivos de configurações.
     *
     * @var array of strings
     */
    protected $configs = array();

    /**
     * Configuration constructor.
     *
     * @param array $paths
     */
    public function __construct(array $configs = null)
    {
        $this->setConfigs($configs);
    }

    /**
     * Retorna o array de configurações.
     *
     * @return array
     */
    public function getConfigs(): array
    {
        return $this->configs;
    }

    /**
     * Combina o array passado por parâmetro com o array do atributo.
     *
     * @param array $configs
     */
    public function setConfigs(array $configs)
    {
        $this->configs = array_merge($this->configs, $configs);
    }

    /**
     * Retorna um item do array de configurações.
     *
     * @param $alias
     * @return bool
     */
    public function get($alias)
    {
        return isset($this->configs[$alias]) ? $this->configs[$alias] : false;
    }
}