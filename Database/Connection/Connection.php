<?php
/**
 * Created by PhpStorm.
 * Author: Jorge Lauro Campos Rodrigues <jorgerodrigues9@outlook.com>
 * Date: 09/10/17
 * Time: 08:02
 */

class Connection extends PDO
{

    use CheckTheDrive;

    /**
     * Driver para conexão PDO.
     *
     * @var string
     */
    private $driver;
    /**
     * Servidor para conexão PDO.
     *
     * @var string
     */
    private $host;
    /**
     * Porta para a conexão PDO.
     *
     * @var int
     */
    private $port;
    /**
     * Banco de dados para a conexão PDO.
     *
     * @var string
     */
    private $database;
    /**
     * Usuário para a conexão PDO.
     *
     * @var string
     */
    private $user;
    /**
     * A chave para a conexão PDO.
     *
     * @var string
     */
    private $password;

    /**
     * Opções para a conexão PDO.
     *
     * @var array
     */
    protected $options = [];

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        //parent::__construct($dsn, $username, $passwd, $options);

    }
}