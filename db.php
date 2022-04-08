<?php

namespace app;

use \PDO;

class DB
{

    final public const HOSTNAME = 'localhost';
    final public const USERNAME = 'root';
    final public const PASSWORD = '';
    final public const DATABASE = 'elib';

    public $conn;

    private $table;
    private $alias;
    private $column = [];
    private $conditions = [];
    private $on = [];
    private $orconditions = [];
    private $values = [];
    private $order = [];
    private $group = [];
    private $like = [];

    private $innerJoin = [];
    private $leftjoin = [];
    private $rightjoin = [];
    private $outerjoin = [];
    private $limit;
    public  $as = "ddd";
    public static $sendOutside;

    public $result;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=" . self::HOSTNAME . ";dbname=" . self::DATABASE . "", self::USERNAME, self::PASSWORD);
        } catch (\PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }



    public static function sendOutside()
    {

        if (self::$sendOutside == null) {

            self::$sendOutside = new DB();
        }

        return self::$sendOutside;
    }



    public function table(string $table, string $alias = null)
    {

        $this->table = $alias === null ? $table : "${table} AS ${alias}";
        return $this;
    }

    public function limit(int $limit)
    {
        $this->limit = $limit;
        return $this;
    }
    public function column(string ...$column)
    {
        $this->column = $column;
        return $this;
    }

    public function where(string ...$where)
    {
        $this->conditions = $where;
        return $this;
    }
    public function orwhere(string ...$orwhere)
    {
        $this->orconditions = $orwhere;
        return $this;
    }
    public function on(string ...$on)
    {
        $this->on = $on;
        return $this;
    }
    public function group(string ...$group)
    {
        $this->group = $group;
        return $this;
    }

    public function order(string ...$order)
    {
        $this->order = $order;
        return $this;
    }

    public function like(string ...$like)
    {
        $this->like = $like;
        return $this;
    }
    public function Innerjoin(string ...$innerjoin)
    {
        $this->innerJoin = $innerjoin;
        return $this;
    }
    public function Outerjoin(string ...$outerjoin)
    {
        $this->outerjoin = $outerjoin;
        return $this;
    }
    public function leftjoin(string ...$leftjoin)
    {
        $this->leftjoin = $leftjoin;
        return $this;
    }
    public function rightjoin(string ...$rightjoin)
    {
        $this->rightjoin = $rightjoin;
        return $this;
    }
    public function values(...$values)
    {
        $this->values = $values;
        return $this;
    }

    public function select()
    {
        $where = $this->conditions === [] ? '' : ' WHERE ' . implode(' AND ', $this->conditions);
        $on = $this->on === [] ? '' : ' ON ' . implode(' AND ', $this->on);
        $orwhere = $this->orconditions === [] ? '' : ' WHERE ' . implode(' OR ', $this->orconditions);
        $order = $this->order === [] ? '' : ' ORDER BY ' . implode(' , ', $this->order);
        $group = $this->group === [] ? '' : ' GROUP BY ' . implode(' , ', $this->group);
        $like = $this->like === [] ? '' : ' like "%' . implode(' , ', $this->like) . '%"';

        $innerjoin = $this->innerJoin === [] ? '' : ' INNER JOIN ' . implode(' INNER JOIN ', $this->innerJoin) . $on;

        $leftjoin = $this->leftjoin === [] ? '' : ' LEFT JOIN ' . implode(' LEFT JOIN ', $this->leftjoin) . $on;
        $rightjoin = $this->rightjoin === [] ? '' : ' RIGHT JOIN ' . implode(' RTGHT JOIN ', $this->rightjoin) . $on;

        $limit = $this->limit === null ? '' : ' LIMIT ' . $this->limit;
        $column  = $this->column === [] ? '*' : implode(',', $this->column);

        $outerjoin = $this->outerjoin === [] ? '' : " UNION SELECT $column FROM " . $this->table  . $rightjoin;
        $sql = "SELECT " . $column . ' FROM ' . $this->table . $leftjoin . $innerjoin . $outerjoin  . $limit . $where . $orwhere . $like . $group . $order;

        // if ($delete) {
        //     $sql = "DELETE FROM " . $column . ' FROM ' . $where . $orwhere . $this->table;
        // }


        echo $sql;

        $stm = $this->conn->prepare($sql);
        if ($stm->execute()) {
            $this->result = $stm->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function insert()
    {
        $column = $this->column === [] ? '' : " (" . implode(',', $this->column) . ") ";
        $values = "(' " . implode("','", $this->values) . " ')";


        // $sql = "INSERT INTO " . $this->table . ' COUNT(' . $column . ')' . " VALUES " . $values;
        $sql = "INSERT INTO " . $this->table . " VALUES " . $values;
        echo $sql;
        $this->conn->prepare($sql)->execute();
    }

    public function delete()
    {

        $where = $this->conditions === [] ? '' : ' WHERE ' . implode(' AND ', $this->conditions);

        $sql = "DELETE FROM " . $this->table . $where;
        echo $sql;

        $this->conn->prepare($sql)->execute();
    }

    public function update()
    {


        // UPDATE `books` SET `is_active` = '0' WHERE `books`.`id` = 6;

        $where = " WHERE " . implode(' AND ', $this->conditions);

        $values = implode(', ', $this->values);

        $sql = "UPDATE " . $this->table . " SET " . $values . $where;
        echo $sql;


        $this->conn->prepare($sql)->execute();
    }

    // public function updateAll()
    // {
    //     $where = " WHERE " . implode(' AND ', $this->conditions);

    //     $sql="UPDATE books SET" title= 'ff', description ='e' "WHERE" `books`. $where;



    //     $values = implode(', ', $this->values);
    //     print_r($values);

    //     $sql = "UPDATE " . $this->table . " SET " . $values . $where;
    //     echo $sql;


    //     $this->conn->prepare($sql)->execute();
    // }
}