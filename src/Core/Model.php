<?php

namespace Weather\Core;


use Weather\Core\QueryBuilder;

class Model extends QueryBuilder
{
    protected $table_name;

    protected $query;

    protected $primaryKey = 'id';

    protected $db;

    protected $model;

    /**
     * Undocumented function
     *
     * @param [type] $table_name
     * @return void
     */
    protected function setTable($table_name)
    {   
        $this->table_name = $table_name;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function getTable()
    {
        return $this->table_name;
    }

   
}
