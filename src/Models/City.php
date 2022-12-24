<?php

namespace Weather\Models;

use Weather\Core\Model;
use Weather\Interfaces\DBInterface;

class City extends Model
{

    protected $table_name = 'cities';

    protected function getCityByName(string $city)
    {
        if (empty($city)) {
            header("Content-Type: application/json");
            return json_encode(['error' => 'City is required field']);
        }

        return $city;
        // return $this->db->searchWhere('cities', 'city_name', $city);
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
