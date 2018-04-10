<?php
namespace app\classes;


class Db1 extends Config
{

    public $connection; // идентификатор соединения

    public function __construct()
    {
        $this->open_connection();
    }

    // соединяемся с БД
    private function open_connection()
    {
        $this->connection = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);

        // если соединение не открыто, выдаем сообщение об ошибке
        if (!$this->connection)
        {
            die("Ошибка соединения с базой данных: ". mysqli_error());
        }
        else
        {
            //echo "OK";
        }

        // установка принудительной кодировки UTF-8
        mysqli_query($this->connection, "set names utf8") or die ("set names utf8 failed");
    }

    // реализация запроса к БД
    public function sql($query)
    {
        $result = mysqli_query($this->connection, $query);

        // если запрос не удался, выдаем сообщение об ошибке
        if (!$result)
        {
            die ("Ошибка запроса к базе данных: ". mysqli_error());
        }

        return $result;
    }
}