<?php

namespace Weather\Core;

use Weather\Core\QueryBuilder;

class Model extends QueryBuilder
{
    protected $table_name;

    protected $query;

    protected $primaryKey = 'id';
}
