<?php
/**
 * Created by PhpStorm.
 * User: debian
 * Date: 16/10/17
 * Time: 09:35
 */

class Filesystem
{
    /**
     * Verifica se o caminho é um diretório.
     *
     * @param string $path
     * @return bool
     */
    protected function isDir(string $path)
    {
        return is_dir($path);
    }

    /**
     *  Verifica se o caminho é um arquivo comum.
     *
     * @param string $path
     * @return bool
     */
    protected function isFile(string $path)
    {
        return is_file($path);
    }

    /**
     * Verifica se o arquivo é um link simbólico.
     *
     * @param string $path
     * @return bool
     */
    protected function isLink(string $path)
    {
        return is_link($path);
    }

    /**
     * Verifica se o arquivo existe e se ele pode ser lido
     *
     * @param string $path
     * @return bool
     */
    protected function isReadable(string $path)
    {
        return is_readable($path);
    }

    /**
     * Verifica se o arquivo foi enviado por POST HTTP
     *
     * @param string $path
     * @return bool
     */
    protected function isUploadedFile(string $path)
    {
        return is_uploaded_file($path);
    }

    /**
     * Verifica se o arquivo pode ser modificado.
     *
     * @param string $path
     * @return bool
     */
    protected function isWriteable(string $path)
    {
        return is_writable($path);
    }

    //

    /**
     * Dado uma string contendo um caminho para um arquivo ou diretório, essa função irá retornar apenas a parte que corresponde ao nome do arquivo.
     *
     * @param string $path
     * @param string $suffix
     * @return mixed
     */
    public function basename(string $path, string $suffix = null)
    {
        return basename($path, $suffix);
    }

    /**
     * Tenta mudar as permissões do arquivo especificado do arquivo para o dado em modo.
     *
     * @param string $path
     * @param int $mode
     * @return bool
     */
    public function chmod(string $path, int $mode = 0755)
    {
        return chmod($path, $mode);
    }

    /**
     * Tenta modificar o dono do arquivo para o usuario. Somente o superusuário pode modificar o dono de um arquivo.
     * As funções afetadas são stat(), lstat(), file_exists(), is_writable(), is_readable(), is_executable(), is_file(),
     * is_dir(), is_link(), filectime(), fileatime(), filemtime(), fileinode(), filegroup(), fileowner(), filesize(),
     * filetype(), e fileperms().
     *
     * @param string $path
     * @param mixed $user
     * @return bool
     */
    public function chown(string $path, mixed $user)
    {
        return chown($path, $user);
    }

    /**
     * Limpa as informações em cache sobre arquivos.
     *
     * @return void
     */
    public function clearstatcache()
    {
        clearstatcache();
    }

    /**
     * Faz uma cópia do arquivo para o caminho de destino.
     *
     * @param string $path
     * @param string $destination
     * @param bool $replace
     * @return bool
     */
    public function copy(string $path, string $destination, bool $replace)
    {
        // Aviso! Se o arquivo de destino já existir, ele será sobrescrito.
        return copy($path, $destination);
    }
}