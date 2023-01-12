<?php
//setup
class carData {
    public $brand = ['Honda', 'Toyota', 'Ford', 'Mercedes', 'Tesla', 'BMW', 'Audi', 'Porsche'];
    public $type = ['SUV', 'Truck', 'EV', 'Hatchback', 'Coup', 'Convertable'];
}

class car {
    public $price = null;
    public $brand = null;
    public $type = null;
}

$cars = [];
for ($i = 0; $i < 25; $i++) {
    $_car = new car();
    $_carData = new carData();

    $_car->price = rand(5000, 50000);
    $_car->brand = $_carData->brand[rand(0, 7)];
    $_car->type = $_carData->type[rand(0, 5)];

    array_push($cars, $_car);
}

if ($_COOKIE['auto'] == null) {
    $_cars = serialize($cars);
    setcookie("auto", $_cars, time() + (60 * 5));
}
?>