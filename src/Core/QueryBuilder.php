<?php

namespace Weather\Core;

use Weather\Classes\DB;


class QueryBuilder extends DB
{

    protected $db;

    protected function findByName($columnName, $search = null)
    {
        // return $this->whereRowId();
    }


    /**
     * Handle dynamic static method calls into the model.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return (new static)->$method(...$parameters);
    }
}
