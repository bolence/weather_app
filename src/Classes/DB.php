<?php

namespace Weather\Classes;

use Weather\Interfaces\DBInterface;
use PDO;


class DB implements DBInterface
{

	protected $db;
	protected $fetch_mode = PDO::FETCH_OBJ;
	protected $error_mode = PDO::ERRMODE_EXCEPTION;


	/**
	 * Class constructor
	 */
	public function __construct()
	{
		$this->connect();
	}

	/**
	 * Prepare pdo connection
	 * @return Object PDO instance
	 */
	public function connect()
	{
		$servername = $_ENV['DB_HOST'];
		$database = $_ENV['DB_DATABASE'];
		try {
			$dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
			$this->db = new PDO($dsn, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, $this->error_mode);
			$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, $this->fetch_mode);
		} catch (\PDOException $e) {

			throw new \PDOException($e);
		} catch (\Exception $e) {

			throw new \Exception($e->getMessage(), (int)$e->getCode());
		}
	}


	/**
	 * Select all from table
	 * @param  String $query
	 * @return        
	 */
	public function select(string $table)
	{
		$query = "SELECT * FROM {$table}";

		return $this->db->query($query)->fetchAll();
	}

	/**
	 * List one row by id from session
	 * @param  String        $table
	 * @param  Integer       $id
	 * @return Object
	 */
	public function whereRowId(string $table, int $id)
	{
		$query = "SELECT * FROM {$table} WHERE id = :id";
		$query = $this->db->prepare($query);
		$query->bindParam('id', $id);
		$query->execute();

		$result = $query->fetch();

		return $result;
	}

	public function whereColumnName(string $table, string $columnName, $search)
	{
		$query = "SELECT * FROM {$table} WHERE {$columnName} = :{$search}";
		$query = $this->db->prepare($query);
		$query->bindParam($columnName, $search);
		$query->execute();

		$result = $query->fetch();

		return $result;
	}

	/**
	 * Get row from search param and column name
	 *
	 * @param string $table
	 * @param string $columnName
	 * @param string $searchParams
	 * @return Object
	 */
	public function searchWhere(string $table, string $column_name, string $search_param)
	{
		$query = "SELECT * FROM {$table} WHERE {$column_name} = ?";
		$query = $this->db->prepare($query);
		$query->bindParam(1, $search_param);
		$query->execute();

		$result = $query->fetch();

		return $result;
	}
}
