<?php 

namespace App\Builder\MySQLQuery;

use App\Builder\MySQLQuery\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{
    private $fields;
    private $table;
    private $conditions = [];
    private $limit;
    
    public function select($table, $fields)
    {
        $this->table = $table;
        $this->fields = $fields;
        return $this;
    }

    public function from($table)
    {
        $this->table = $table;
        return $this;
    }

    public function where($field, $value, $operator = '=')
    {
        $this->conditions[] = "$field $operator '$value'";
        return $this;
    }

    public function limit($offset, $count)
    {
        $this->limit = "LIMIT $offset, $count";
        return $this;
    }

    public function get()
    {
        $query = "SELECT " . implode(', ', $this->fields) . " FROM {$this->table}";

        if (!empty($this->conditions)) {
            $query .= " WHERE " . implode(' AND ', $this->conditions);
        }

        if (!empty($this->limit)) {
            $query .= " " . $this->limit;
        }

        return $query;
    }   

    public function reset()
    {
        $this->fields = null;
        $this->table = null;
        $this->conditions = [];
        $this->limit = null;
        return $this;
    }

    
}
