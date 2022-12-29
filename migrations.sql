CREATE DATABASE IF NOT EXISTS weather;
USE weather;
CREATE TABLE IF NOT EXISTS cities(
    id INT(10) NOT NULL AUTO_INCREMENT, 
    latitude VARCHAR(10),
    longitude VARCHAR(10),
    city_name VARCHAR(255), 
    PRIMARY KEY (id)
);


INSERT INTO cities (city_name, latitude, longitude) VALUES
('Tokyo Tokyo', '35,6839',	'139,7744'),
('Jakarta Jakarta',	"-6,2146",	"106,8451"),
('Delhi Delhi',	"28,6667",	"77,2167"),
('Manila Manila', "14,6", "120,9833"),
('São Paulo Sao Paulo', "-23,5504",	"-46,6339"),
('Seoul Seoul', '37,56',	"126,99"),
('Mumbai Mumbai',	"19,0758",	"72,8775"),
('Shanghai Shanghai',	"31,1667", "121,4667"),
('Mexico City Mexico City',	"19,4333",	"-99,1333"),
('Guangzhou	Guangzhou',	"23,1288", "113,259")