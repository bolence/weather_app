<?php
require_once realpath('vendor/autoload.php');
// load env file config
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Weather\Models\City;
use Weather\Classes\MySQL;

// $city = new City();
echo City::getCityByName('cityname');
// echo $c->city_name;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Weather application</title>
</head>

<body>

    <div class="row d-flex justify-content-center mt-5">

        <div class="col-md-6">
            <label>Longitude:</label>
            <input type="text" class="form-control mb-2" name="longitude" disabled />
            <label>Latitude:</label>
            <input type="text" class="form-control mb-2" name="latitude" disabled />
            <label>Search city:</label>
            <input type="text" class="form-control mb-2" />
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary search">Search city</button>
            </div>
        </div>

    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="js/main.js"></script>

</body>

</html>