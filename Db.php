<?php

class Db
{

    protected static $instance = null;

    protected PDO $dbh;

    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        $this->dbh = new \PDO('pgsql:host=localhost;dbname=profit', 'profit', 'profit');
    }

    public function query($sql, $class, $params = []): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $params): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }

}
