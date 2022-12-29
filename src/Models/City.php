<?php

namespace Weather\Models;

use Weather\Core\Model;
use Weather\Core\QueryBuilder;

class City extends Model
{

    protected $table_name = 'cities';
    protected $queryBuilder;


    protected function query()
    {
        return (new QueryBuilder())->setModel($this);
    }

    protected function getTable()
    {
        return $this->table_name;
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
