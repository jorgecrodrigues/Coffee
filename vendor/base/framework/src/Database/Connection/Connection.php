<?php
/**
 * Created by PhpStorm.
 * Author: Jorge Lauro Campos Rodrigues <jorgerodrigues9@outlook.com>
 * Date: 09/10/17
 * Time: 08:02
 */

class Connection extends PDO
{

    use CheckTheDriver;

    /**
     * Driver para conexão PDO.
     *
     * @var string
     */
    protected $driver;
    /**
     * Servidor para conexão PDO.
     *
     * @var string
     */
    protected $host;
    /**
     * Porta para a conexão PDO.
     *
     * @var int
     */
    protected $port;
    /**
     * Banco de dados para a conexão PDO.
     *
     * @var string
     */
    protected $database;
    /**
     * Usuário para a conexão PDO.
     *
     * @var string
     */
    protected $user;
    /**
     * A chave para a conexão PDO.
     *
     * @var string
     */
    protected $password;

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

    /**
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * @param string $driver
     */
    public function setDriver(string $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host)
    {
        $this->host = $host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }

    /**
     * @param string $database
     */
    public function setDatabase(string $database)
    {
        $this->database = $database;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }
}