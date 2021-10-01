<?php

include 'Vehicle.php';

class Car extends Vehicle
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
        return $this->carBrand;
    }

    /**
     * @return mixed
     */
    public function getCarModel()
    {
        return $this->carModel;
    }

    /**
     * @return mixed
     */
    public function getCarYear()
    {
        return $this->carYear;
    }
}