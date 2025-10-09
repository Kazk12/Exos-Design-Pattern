<?php 

namespace App\Builder\MySQLQuery\Interfaces;

interface QueryBuilderInterface{
    public function select($table, $fields);
    public function from($table);
    public function where($field, $value, $operator = '=');
    public function reset();
    public function limit ($offset, $count);
}