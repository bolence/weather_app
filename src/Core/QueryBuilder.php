<?php

namespace Weather\Core;

use Weather\Classes\DB;


class QueryBuilder extends DB
{

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return void
     */
    public function find(int $id)
    {
        return $this->whereRowId($this->getModel()->getTable(), $id);
    }

    /**
     * Undocumented function
     *
     * @param [type] $columnName
     * @param [type] $search
     * @return void
     */
    public function findByName(string $columnName, string $search)
    {
        return $this->searchWhere($this->getModel()->getTable(), $columnName, $search);
    }

    /**
     * Undocumented function
     *
     * @param Model $model
     * @return Model
     */
    public function setModel(Model $model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return Object
     */
    public function getModel()
    {
        return $this->model;
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
