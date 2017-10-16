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
     * Verifica se o diretório ou arquivo existe.
     *
     * @param string $path
     * @return bool
     */
    private function exists(string $path)
    {
        return file_exists($path);
    }

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
     * Verifica se o arquivo existe e pode ser modificado.
     *
     * ATENÇÃO! Em caso de falha um E_WARNING será emitido.
     * @param  string $path
     * @return bool
     */
    protected function isWriteable(string $path)
    {
        return is_writable($path);
    }

    //

    /**
     * Retorna o caminho até o diretório ou arquivo.
     *
     * @param string $path
     * @return mixed
     */
    public function dirname(string $path)
    {
        return pathinfo($path, PATHINFO_DIRNAME);
    }

    /**
     * Retorna o nome base do diretório ou arquivo.
     *
     * @param string $path
     * @return mixed
     */
    public function basename(string $path)
    {
        return pathinfo($path, PATHINFO_BASENAME);
    }

    /**
     * Retorna o nome do diretótio ou arquivo sem extensão
     *
     * @param string $path
     * @return mixed
     */
    public function filename(string $path)
    {
        return pathinfo($path, PATHINFO_FILENAME);
    }

    /**
     * Retorna a extensão do arquivo.
     *
     * @param string $path
     * @return mixed
     */
    public function extension(string $path)
    {
        return pathinfo($path, PATHINFO_EXTENSION);
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
     * Escreve uma string para um arquivo. Se filename não existir, o arquivo é criado.
     *
     * ATENÇÃO! A função retorna a quantidade de bytes que foi escrita no arquivo ou FALSE em caso de falha.
     *
     * @param string $filename
     * @param mixed $data
     * @param bool $apped
     * @param bool $text
     * @return bool|int
     */
    public function put(string $filename, $data, bool $apped = false)
    {
        // Verifica se o diretório do arquivo existe e se pode ser modificado.
        if (!$this->isWriteable($this->dirname($filename))) {
            return false;
        }

        // Verifica se o arquivo já existe e se pode ser modificado.
        if ($this->isFile($filename) && !$this->isWriteable($filename)) {
            return false;
        }

        // Acrescenta os dados ao final do arquivo ao invés de sobrescrevê-lo.
        if ($apped) {
            return file_put_contents($filename, $data, FILE_APPEND);
        }
        return file_put_contents($filename, $data);
    }

    /**
     * Faz uma cópia do arquivo para o caminho de destino.
     *
     *
     * @param string $path
     * @param string $destination
     * @param bool $replace
     * @return bool
     */
    public function copy(string $path, string $destination, bool $replace = false)
    {
        // Verifica se o caminho do arquivo existe e se pode ser lido, e se o caminho de destino
        // pode ser modificado.
        if (!($this->isReadable($path) && $this->isWriteable($this->dirname($destination)))) {
            return false;
        }

        // Verifica se o diretório ou arquivo já existe no destino.
        if (!$replace && $this->exists($this->dirname($destination) . '/' . $this->filename($destination))) {
            return false;
        }

        // Aviso! Se o arquivo de destino já existir, ele será sobrescrito.
        return copy($path, $destination);
    }
}