CREATE DATABASE IF NOT EXISTS weather;
USE weather;
CREATE TABLE IF NOT EXISTS cities(
    id INT(10) NOT NULL, 
    latitude VARCHAR(10),
    longitude VARCHAR(10),
    city_name VARCHAR(255), 
    PRIMARY KEY (id)
);