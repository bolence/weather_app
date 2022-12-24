<?php

namespace Weather\Interfaces;


interface DBInterface
{

	public function connect();

	public function whereRowId(string $table, int $id);

	public function searchWhere(string $table, string $column_name, string $search_param);
}
