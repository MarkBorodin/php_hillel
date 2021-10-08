<?php

namespace App;

use GuzzleHttp\Client;

class Truck extends Vehicle
{
    protected $carBrand;
    protected $carModel;
    protected $carYear;

    public function __construct($carBrand, $carModel, $carYear, $enginePower, $numberOfGears)
    {
        parent::__construct($enginePower, $numberOfGears);
        $this->carBrand = $carBrand;
        $this->carModel = $carModel;
        $this->carYear = $carYear;
    }

    /**
     * @return mixed
     */
    public function getCarBrand()
    {
        return "$this->carBrand (this is a truck)".PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getCarModel()
    {
        return "$this->carModel (this is a truck model)".PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getCarYear()
    {
        return "$this->carYear (year of production of the truck)".PHP_EOL;
    }

    public function show_car()
    {
        $client = new Client();
        $response = $client->get("https://www.google.com/search?q=$this->carBrand+$this->carModel+$this->carYear");
        echo $response->getBody()->getContents();
    }
}