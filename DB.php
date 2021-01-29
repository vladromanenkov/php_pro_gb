<?php


class DB
{
    public const TABLE = 'goods';

    private static $config = [
        'dsn' => 'mysql:host=localhost;dbname=dz4',
        'user' => 'root',
        'pwd' => '1234',
    ];

    private static $instance;
    private $link;


    public function getAllData($tableName)
    {
        return $this->link
            ->query('SELECT * FROM ' . $tableName)
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLimit($tableName, int $start, int $limit)
    {
        return $this->link
            ->query("SELECT * FROM {$tableName} LIMIT {$start},{$limit}")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCount($tableName)
    {
        return $this->link
            ->query("SELECT COUNT(*) FROM {$tableName}")
            ->fetchColumn();
    }

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $this->link = new PDO(
            self::$config['dsn'],
            self::$config['user'],
            self::$config['pwd']
        );
    }


}